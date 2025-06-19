<?php

namespace Modules\Core\app\Services;

use Modules\Core\app\Models\Cliente;
use Modules\Core\app\Models\Plan;
use Carbon\Carbon;
use Illuminate\Support\Facades\Log;

class SubscriptionService
{
    /**
     * Suscribir un cliente a un plan específico
     *
     * @param Cliente $cliente El cliente a suscribir
     * @param Plan $plan El plan al que suscribir al cliente
     * @param bool $renovacion Si es renovación o cambio de plan
     * @return Cliente Cliente actualizado
     */
    public function suscribirAPlan(Cliente $cliente, Plan $plan, bool $renovacion = false): Cliente
    {
        // Si hay una suscripción activa, tomar la fecha de fin como inicio de la nueva
        // De lo contrario, iniciar desde ahora
        $fechaInicio = null;

        if ($renovacion && $cliente->tieneSuscripcionActiva() && $cliente->fecha_fin_suscripcion > now()) {
            $fechaInicio = Carbon::parse($cliente->fecha_fin_suscripcion);
        } else {
            $fechaInicio = now();
        }

        // Calcular fecha de fin basada en la duración del plan
        $duracionDias = $plan->duracion_dias ?? 30;
        $fechaFin = (clone $fechaInicio)->addDays($duracionDias);

        // Actualizar datos de suscripción
        $cliente->update([
            'plan_id' => $plan->id,
            'fecha_inicio_suscripcion' => $fechaInicio,
            'fecha_fin_suscripcion' => $fechaFin,
            'estado_suscripcion' => 'activa',
            'ultimo_pago' => now(),
            'proximo_pago' => $fechaFin,
        ]);

        Log::info('Cliente suscrito a plan', [
            'cliente_id' => $cliente->id,
            'plan_id' => $plan->id,
            'plan_nombre' => $plan->nombre,
            'fecha_inicio' => $fechaInicio,
            'fecha_fin' => $fechaFin
        ]);

        return $cliente;
    }
      /**
     * Verifica si el cliente tiene una suscripción activa
     *
     * @param Cliente $cliente El cliente a verificar
     * @return bool True si la suscripción está activa
     */
    public function tieneSuscripcionActiva(Cliente $cliente): bool
    {
        return $cliente->estado_suscripcion === 'activa' &&
               $cliente->fecha_fin_suscripcion !== null &&
               $cliente->fecha_fin_suscripcion > now();
    }

    /**
     * Asignar plan de prueba gratuito a un nuevo cliente
     *
     * @param Cliente $cliente El cliente nuevo
     * @param int $diasPrueba Cantidad de días para la prueba (por defecto 30)
     * @return Cliente Cliente con plan gratuito asignado
     */
    public function asignarPruebaGratuita(Cliente $cliente, int $diasPrueba = 30): Cliente
    {
        // Buscar plan gratuito
        $plan = Plan::where('nombre', 'Free')->first();

        if (!$plan) {
            Log::error('Plan gratuito "Free" no encontrado');
            throw new \Exception('Plan gratuito no encontrado');
        }

        // Determinar duración de la prueba (usar valor del plan o el predeterminado)
        $duracionDias = $plan->duracion_dias ?? $diasPrueba;

        // Asignar plan gratuito
        $fechaActual = now();
        $fechaFin = (clone $fechaActual)->addDays($duracionDias);

        $cliente->update([
            'plan_id' => $plan->id,
            'fecha_inicio_suscripcion' => $fechaActual,
            'fecha_fin_suscripcion' => $fechaFin,
            'estado_suscripcion' => 'activa',
            'ultimo_pago' => $fechaActual,
            'proximo_pago' => $fechaFin
        ]);

        Log::info('Plan gratuito asignado a nuevo cliente', [
            'cliente_id' => $cliente->id,
            'plan_id' => $plan->id,
            'plan_nombre' => $plan->nombre,
            'duracion_dias' => $duracionDias,
            'fecha_inicio' => $fechaActual,
            'fecha_fin' => $fechaFin
        ]);

        return $cliente;
    }

    /**
     * Cancelar una suscripción pero mantener acceso hasta el final del período
     *
     * @param Cliente $cliente El cliente cuya suscripción se cancela
     * @param string $motivo Motivo opcional de cancelación
     * @return Cliente Cliente con suscripción cancelada
     */
    public function cancelarSuscripcion(Cliente $cliente, string $motivo = null): Cliente
    {
        $cliente->update([
            'estado_suscripcion' => 'cancelada',
            'metadata' => array_merge($cliente->metadata ?? [], [
                'fecha_cancelacion' => now()->toDateTimeString(),
                'motivo_cancelacion' => $motivo
            ])
        ]);

        Log::info('Suscripción cancelada', [
            'cliente_id' => $cliente->id,
            'plan_id' => $cliente->plan_id,
            'fecha_fin_acceso' => $cliente->fecha_fin_suscripcion,
            'motivo' => $motivo
        ]);

        return $cliente;
    }

    /**
     * Suspender inmediatamente una suscripción
     *
     * @param Cliente $cliente El cliente cuya suscripción se suspende
     * @param string $motivo Motivo de suspensión
     * @return Cliente Cliente con suscripción suspendida
     */
    public function suspenderSuscripcion(Cliente $cliente, string $motivo): Cliente
    {
        $cliente->update([
            'estado_suscripcion' => 'suspendida',
            'metadata' => array_merge($cliente->metadata ?? [], [
                'fecha_suspension' => now()->toDateTimeString(),
                'motivo_suspension' => $motivo
            ])
        ]);

        Log::info('Suscripción suspendida', [
            'cliente_id' => $cliente->id,
            'plan_id' => $cliente->plan_id,
            'motivo' => $motivo
        ]);

        return $cliente;
    }

    /**
     * Reactivar una suscripción previamente cancelada o suspendida
     *
     * @param Cliente $cliente El cliente cuya suscripción se reactiva
     * @param int|null $diasExtencion Días adicionales para extender la suscripción
     * @return Cliente Cliente con suscripción reactivada
     */
    public function reactivarSuscripcion(Cliente $cliente, int $diasExtencion = null): Cliente
    {
        // Si la fecha de fin ya pasó, usar la fecha actual + duración del plan
        if ($cliente->fecha_fin_suscripcion < now()) {
            $plan = $cliente->plan;
            $duracionDias = $plan->duracion_dias ?? 30;
            $fechaFin = now()->addDays($duracionDias);

            if ($diasExtencion) {
                $fechaFin = $fechaFin->addDays($diasExtencion);
            }

            $cliente->update([
                'estado_suscripcion' => 'activa',
                'fecha_inicio_suscripcion' => now(),
                'fecha_fin_suscripcion' => $fechaFin,
                'ultimo_pago' => now()
            ]);
        } else {
            // Si aún no expiró, simplemente reactivar
            $fechaFin = $cliente->fecha_fin_suscripcion;

            // Agregar días de extensión si se especifican
            if ($diasExtencion) {
                $fechaFin = Carbon::parse($fechaFin)->addDays($diasExtencion);
            }

            $cliente->update([
                'estado_suscripcion' => 'activa',
                'fecha_fin_suscripcion' => $fechaFin
            ]);
        }

        Log::info('Suscripción reactivada', [
            'cliente_id' => $cliente->id,
            'plan_id' => $cliente->plan_id,
            'fecha_fin_nueva' => $cliente->fecha_fin_suscripcion
        ]);

        return $cliente;
    }
}
