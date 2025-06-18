<?php

namespace Modules\Onboarding\app\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterClientRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true; // Registro público
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'empresa_nombre' => 'required|string|max:255',
            'pais' => 'required|string|max:3|in:MX,CO,US',
            'plan_id' => 'required|exists:planes,id',
            'password' => 'required|string|min:8|confirmed',
            'terms' => 'required|accepted',
            'privacy' => 'required|accepted',
        ];
    }

    /**
     * Get custom attributes for validator errors.
     */
    public function attributes(): array
    {
        return [
            'name' => 'nombre',
            'last_name' => 'apellido',
            'email' => 'correo electrónico',
            'empresa_nombre' => 'nombre de la empresa',
            'pais' => 'país',
            'plan_id' => 'plan',
            'password' => 'contraseña',
            'terms' => 'términos y condiciones',
            'privacy' => 'política de privacidad',
        ];
    }

    /**
     * Get custom validation messages.
     */
    public function messages(): array
    {
        return [
            'email.unique' => 'Ya existe una cuenta con este correo electrónico.',
            'pais.in' => 'El país seleccionado no es válido.',
            'plan_id.exists' => 'El plan seleccionado no es válido.',
            'password.confirmed' => 'La confirmación de contraseña no coincide.',
            'terms.accepted' => 'Debe aceptar los términos y condiciones.',
            'privacy.accepted' => 'Debe aceptar la política de privacidad.',
        ];
    }
}
