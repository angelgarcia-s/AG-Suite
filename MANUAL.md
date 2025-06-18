# 📚 Manual Completo - AG Business Suite
## Sistema SaaS Multitenant Modular

---

## 📋 Índice del Manual

### 📖 **Guía para Usuarios y Administradores**
1. [🎯 ¿Qué es AG Business Suite?](#-qué-es-ag-business-suite)
2. [🏗️ Arquitectura Multitenant](#-arquitectura-multitenant)
3. [🧩 Sistema Modular](#-sistema-modular)
4. [🔑 Gestión de Roles y Permisos](#-gestión-de-roles-y-permisos)
5. [👥 Gestión de Empresas y Usuarios](#-gestión-de-empresas-y-usuarios)

### �️ **Guía para Desarrolladores**
6. [⚙️ Instalación y Configuración](#-instalación-y-configuración)
7. [�️ Estructura del Proyecto](#-estructura-del-proyecto)
8. [📦 Módulos del Sistema](#-módulos-del-sistema)
   - [🔍 Módulo Core](#-módulo-core)
   - [� Módulo Onboarding](#-módulo-onboarding)
9. [� Sistema Multitenant: Componentes Clave](#-sistema-multitenant-componentes-clave)
10. [📝 Creación de Nuevos Módulos](#-creación-de-nuevos-módulos)
11. [🗄️ Estructura de Base de Datos](#-estructura-de-base-de-datos)

### 🔧 **Mantenimiento y Soporte**
12. [✅ Verificación del Sistema](#-verificación-del-sistema)
13. [⚠️ Troubleshooting y Errores Comunes](#-troubleshooting-y-errores-comunes)
14. [🔮 Roadmap y Recomendaciones](#-roadmap-y-recomendaciones)

---

## 🎯 ¿Qué es AG Business Suite?

**AG Business Suite** es como un "edificio de oficinas inteligente" donde diferentes empresas pueden tener sus propias oficinas (datos completamente separados), pero comparten la infraestructura básica del edificio (la plataforma).

### 🏢 Imagínalo Como un Edificio de Oficinas:
- **El edificio** = La plataforma AG Business Suite
- **Las oficinas** = Las empresas de cada cliente
- **Los inquilinos** = Los usuarios de cada empresa
- **Los servicios del edificio** = Los módulos (como elevadores, aire acondicionado, seguridad)
- **La administración del edificio** = AG Business Suite (nosotros)

### ✨ Características Principales (En Términos Simples)

#### 🏠 **Multitenant** 
- Cada empresa tiene sus datos completamente separados
- Es como si cada empresa tuviera su propia caja fuerte
- Una empresa NUNCA puede ver los datos de otra empresa

#### 🧩 **Modular**
- El sistema está dividido en "piezas" independientes
- Cada cliente puede contratar solo las piezas que necesita
- Como un menú de restaurante: puedes pedir solo los platos que quieres

#### 🌍 **Multi-país**
- Funciona en diferentes países (México, Colombia, etc.)
- Maneja diferentes monedas (MXN, COP, USD)
- Se adapta a las leyes fiscales de cada país

#### 💰 **SaaS (Software como Servicio)**
- Los clientes pagan una mensualidad
- No necesitan instalar nada en sus computadoras
- Acceden desde cualquier navegador web

### 🚀 Estado Actual del Proyecto

**¡El sistema está 100% funcional y listo para usar!**

#### ✅ Lo que Ya Funciona:
1. **Base de datos completa**: Todas las tablas y relaciones creadas
2. **Sistema modular**: Core separado de módulos de negocio
3. **Datos de prueba**: Empresas y usuarios de ejemplo
4. **Separación de datos**: Cada empresa ve solo sus datos
5. **Sistema de permisos**: Control de quién puede hacer qué

#### 🎮 Un Solo Comando Para Probarlo:
```bash
php artisan migrate:fresh --seed
```
Este comando:
1. Borra toda la base de datos anterior
2. Crea todas las tablas nuevas
3. Llena las tablas con datos de ejemplo
4. En 30 segundos tienes un sistema completo funcionando

---

## 🏗️ Arquitectura Multitenant

### 🔑 Conceptos Clave del Sistema Multitenant

El sistema AG Business Suite está diseñado como una plataforma SaaS multitenant, lo que significa que puede servir a múltiples clientes desde una única instalación del software, manteniendo los datos de cada cliente completamente aislados.

### 📊 Diferencia entre Cliente y Empresa

La distinción entre **Cliente** y **Empresa** es fundamental para entender cómo funciona la arquitectura multitenancy en AG Business Suite:

#### 🏢 Cliente

- Representa la **entidad legal o persona** que contrata el servicio SaaS
- Gestiona el **contrato, facturación y suscripción**
- Un Cliente puede tener **múltiples Empresas** bajo su administración
- Controla el **plan contratado** y los **módulos disponibles** para sus empresas
- Ejemplo: Una corporación con múltiples sucursales o un grupo empresarial

#### 🏬 Empresa

- Representa una **unidad operativa** dentro del Cliente
- Es el verdadero **"tenant" (inquilino)** del sistema
- Los **datos están separados** a nivel de Empresa
- Cada Empresa tiene sus propios **usuarios, configuraciones y datos específicos**
- Ejemplo: Una sucursal, una oficina o un negocio específico dentro del Cliente

### 📚 Relación Cliente-Empresa en el Código

El sistema utiliza esta estructura en la creación de nuevos clientes:

1. Se crea un **Cliente** con su plan de suscripción correspondiente
2. Se asignan **Módulos** al Cliente según su plan
3. Se crea una o más **Empresas** asociadas al Cliente
4. Se crean **Usuarios** asignados a cada Empresa específica

### 🛡️ La Empresa Matriz

El sistema incluye una "Empresa Matriz" especial:

- Tiene un **plan especial** sin limitaciones
- Posee **acceso a todos los módulos** del sistema
- Alberga a los **Super Administradores** que pueden gestionar todas las empresas
- No tiene fecha de vencimiento de suscripción
- Se crea automáticamente durante la instalación del sistema

### 🌐 Ejemplo en Datos Seeder

```php
// Crear Cliente Matriz
$clienteMatriz = Cliente::create([
    'plan_id' => $planMatriz->id,
    'nombre' => 'AG Business Suite',
    'email' => 'facturacion@agbusinesssuite.com',
    // Configuración especial para la matriz
    'metadata' => [
        'es_matriz' => true,
        'acceso_total_sistema' => true,
    ],
]);

// Asignar todos los módulos al Cliente Matriz
// ...

// Crear Empresa Matriz asociada al Cliente Matriz
$empresaMatriz = Empresa::create([
    'cliente_id' => $clienteMatriz->id,
    'nombre' => 'AG Business Suite',
    // Configuración específica de la empresa
    'configuracion' => [
        'es_matriz' => true,
        'acceso_total_sistema' => true,
    ],
]);

// Crear Super Administrador asignado a la Empresa Matriz
$superAdmin = User::create([
    'name' => 'Super Administrador',
    'email' => 'admin@agbusinesssuite.com',
    'tipo_usuario' => 'super_admin',
    'empresa_id' => $empresaMatriz->id,
]);
```

---

## 🚀 Instalación y Configuración

### 📋 Requisitos del Sistema

#### 🖥️ **Para Desarrollo**
- **PHP** >= 8.2
- **Composer** (gestor de paquetes PHP)
- **Node.js** >= 18.x y **npm**
- **MySQL** >= 8.0 o **MariaDB** >= 10.4
- **Git** (control de versiones)
- **XAMPP, WAMP, o LAMP** (recomendado para desarrollo local)

#### 🌐 **Para Producción**
- **Servidor Linux** (Ubuntu 22.04 LTS recomendado)
- **Nginx** o **Apache** con mod_rewrite
- **PHP-FPM** >= 8.2
- **MySQL** >= 8.0 (dedicado)
- **Redis** (opcional, para cache y sesiones)
- **SSL Certificate** (Let's Encrypt recomendado)
- **Supervisor** (para queues y procesos en background)

### 🛠️ Instalación para Desarrollo

#### 1. Clonar el Repositorio
```bash
# Clonar el proyecto
git clone [URL_DEL_REPOSITORIO] ag-business-suite
cd ag-business-suite
```

#### 2. Configurar Dependencias PHP
```bash
# Instalar dependencias de Composer
composer install

# Regenerar autoload (importante para la estructura modular)
composer dump-autoload
```

#### 3. Configurar Dependencias Frontend
```bash
# Instalar dependencias de Node.js
npm install

# Compilar assets para desarrollo
npm run dev

# O para compilar y observar cambios en tiempo real
npm run watch
```

#### 4. Configurar Base de Datos
```bash
# Copiar archivo de configuración
cp .env.example .env

# Generar clave de aplicación
php artisan key:generate
```

**Configurar `.env` para desarrollo:**
```env
APP_NAME="AG Business Suite"
APP_ENV=local
APP_KEY=[generada automáticamente]
APP_DEBUG=true
APP_URL=http://localhost:8000

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=ag_business_suite
DB_USERNAME=root
DB_PASSWORD=

CACHE_DRIVER=file
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
```

#### 5. Crear Base de Datos
```bash
# Crear base de datos (ejecutar en MySQL)
CREATE DATABASE ag_business_suite CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
```

#### 6. Ejecutar Migraciones y Seeders
```bash
# Para desarrollo completo (con datos de prueba)
php artisan migrate:fresh --seed

# O solo infraestructura (sin datos de prueba)
php artisan migrate:fresh
php artisan db:seed --class=ProductionSeeder
```

#### 7. Iniciar Servidor de Desarrollo
```bash
# Servidor Laravel integrado
php artisan serve

# El sistema estará disponible en: http://localhost:8000
```

#### 8. Verificar Instalación
```bash
# Verificar datos creados
php artisan tinker --execute="echo 'Planes: ' . Modules\Core\Models\Plan::count(); echo '\nEmpresas: ' . Modules\Core\Models\Empresa::count();"

# Verificar rutas del módulo Onboarding
php artisan route:list --name=onboarding
```

### 🌐 Instalación para Producción

#### 1. Preparar Servidor
```bash
# Actualizar sistema (Ubuntu)
sudo apt update && sudo apt upgrade -y

# Instalar dependencias básicas
sudo apt install -y git curl zip unzip software-properties-common

# Instalar PHP 8.2
sudo add-apt-repository ppa:ondrej/php
sudo apt update
sudo apt install -y php8.2 php8.2-fpm php8.2-mysql php8.2-mbstring php8.2-xml php8.2-curl php8.2-zip php8.2-bcmath php8.2-json php8.2-tokenizer

# Instalar Composer
curl -sS https://getcomposer.org/installer | php
sudo mv composer.phar /usr/local/bin/composer

# Instalar Node.js
curl -fsSL https://deb.nodesource.com/setup_18.x | sudo -E bash -
sudo apt install -y nodejs
```

#### 2. Configurar MySQL
```bash
# Instalar MySQL
sudo apt install -y mysql-server

# Configurar seguridad
sudo mysql_secure_installation

# Crear base de datos y usuario
sudo mysql -u root -p
```

```sql
CREATE DATABASE ag_business_suite CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
CREATE USER 'agbusiness'@'localhost' IDENTIFIED BY 'password_seguro_aqui';
GRANT ALL PRIVILEGES ON ag_business_suite.* TO 'agbusiness'@'localhost';
FLUSH PRIVILEGES;
EXIT;
```

#### 3. Configurar Aplicación
```bash
# Clonar en directorio de producción
cd /var/www
sudo git clone [URL_DEL_REPOSITORIO] ag-business-suite
cd ag-business-suite

# Instalar dependencias
sudo composer install --optimize-autoloader --no-dev
sudo npm install
sudo npm run build

# Configurar permisos
sudo chown -R www-data:www-data /var/www/ag-business-suite
sudo chmod -R 755 /var/www/ag-business-suite
sudo chmod -R 775 storage bootstrap/cache
```

#### 4. Configurar `.env` para Producción
```env
APP_NAME="AG Business Suite"
APP_ENV=production
APP_KEY=[generar nueva]
APP_DEBUG=false
APP_URL=https://tu-dominio.com

DB_CONNECTION=mysql
DB_HOST=localhost
DB_PORT=3306
DB_DATABASE=ag_business_suite
DB_USERNAME=agbusiness
DB_PASSWORD=password_seguro_aqui

CACHE_DRIVER=redis
QUEUE_CONNECTION=redis
SESSION_DRIVER=redis
REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_MAILER=smtp
MAIL_HOST=tu-servidor-smtp.com
MAIL_PORT=587
MAIL_USERNAME=tu-email@dominio.com
MAIL_PASSWORD=tu-password
MAIL_ENCRYPTION=tls
```

#### 5. Optimizaciones de Producción
```bash
# Generar clave nueva
sudo php artisan key:generate

# Ejecutar migraciones y seeder de producción
sudo php artisan migrate --force
sudo php artisan db:seed --class=ProductionSeeder --force

# Optimizar aplicación
sudo php artisan config:cache
sudo php artisan route:cache
sudo php artisan view:cache
sudo php artisan optimize

# Reiniciar servicios
sudo systemctl restart php8.2-fpm
sudo systemctl restart nginx
```

#### 6. Configurar Nginx (ejemplo básico)
```nginx
server {
    listen 80;
    server_name tu-dominio.com;
    root /var/www/ag-business-suite/public;
    index index.php;

    location / {
        try_files $uri $uri/ /index.php?$query_string;
    }

    location ~ \.php$ {
        fastcgi_pass unix:/var/run/php/php8.2-fpm.sock;
        fastcgi_index index.php;
        fastcgi_param SCRIPT_FILENAME $realpath_root$fastcgi_script_name;
        include fastcgi_params;
    }
}
```

### 🔐 Configuración de Seguridad

#### Credenciales por Defecto
**Super Administrador:**
- **Email**: `admin@agbusinesssuite.com`
- **Password**: `AGBusiness*2025`
- **Tipo**: `super_admin`

⚠️ **IMPORTANTE**: Cambiar esta contraseña inmediatamente en producción.

#### Cambiar Contraseña de Super Admin
```bash
php artisan tinker --execute="
\$admin = App\Models\User::where('email', 'admin@agbusinesssuite.com')->first();
\$admin->password = bcrypt('nueva_contraseña_super_segura');
\$admin->save();
echo 'Contraseña actualizada';
"
```

### ✅ Verificación Post-Instalación

#### Comandos de Verificación
```bash
# Verificar estado de la aplicación
php artisan about

# Verificar conexión a base de datos
php artisan migrate:status

# Verificar datos básicos
php artisan tinker --execute="
echo 'Planes: ' . Modules\Core\Models\Plan::count();
echo '\nMódulos: ' . Modules\Core\Models\Modulo::count();
echo '\nEmpresas: ' . Modules\Core\Models\Empresa::count();
echo '\nUsuarios: ' . App\Models\User::count();
"

# Verificar rutas funcionando
php artisan route:list

# Probar registro público
curl -X GET http://tu-dominio.com/register
```

#### URLs Importantes
- **Panel Admin**: `https://tu-dominio.com/admin`
- **Registro Público**: `https://tu-dominio.com/register`
- **API**: `https://tu-dominio.com/api`

### 🔄 Comandos de Mantenimiento

#### Desarrollo
```bash
# Resetear todo el sistema
php artisan migrate:fresh --seed

# Limpiar cachés
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear

# Recompilar assets
npm run dev

# Regenerar autoload
composer dump-autoload
```

#### Producción
```bash
# Actualizar código
sudo git pull origin main
sudo composer install --optimize-autoloader --no-dev
sudo npm run build

# Ejecutar migraciones pendientes
sudo php artisan migrate --force

# Optimizar aplicación
sudo php artisan optimize:clear
sudo php artisan optimize

# Reiniciar servicios
sudo systemctl restart php8.2-fpm nginx
```

### 📝 Notas Importantes

#### ✅ **Comandos Verificados**
Todos los comandos de esta guía han sido probados y funcionan correctamente con la estructura modular actual del sistema.

#### 🔐 **Seguridad**
- Cambiar credenciales por defecto en producción
- Configurar firewall y SSL
- Hacer backup regular de base de datos
- Monitorear logs de seguridad

#### 🚀 **Rendimiento**
- Usar Redis para cache en producción
- Configurar queue workers con Supervisor
- Optimizar consultas de base de datos
- Configurar CDN para assets estáticos

#### 📞 **Soporte**
- Manual completo disponible en este documento
- Sección de troubleshooting al final del manual
- Logs en `storage/logs/laravel.log`

---

## 🏗️ ¿Cómo Funciona la Arquitectura? (Explicación Simple)

### 🏢 Jerarquía: De Arriba Hacia Abajo

Imagina una empresa como McDonald's que maneja muchos restaurantes:

```
SUPER ADMINISTRADOR (AG Business Suite - Nosotros)
│
├── CLIENTE 1: "Grupo Restaurantero ABC" 
│   ├── 💳 Plan: Profesional ($79,000/mes)
│   ├── 📦 Módulos: Dashboard, Productos, Inventario
│   ├── 🏪 EMPRESA: "Restaurante Centro" (México DF)
│   │   ├── 👤 Juan Pérez (Gerente)
│   │   ├── 👤 María López (Cajera)
│   │   └── 📊 SUS DATOS: 500 productos, 1000 clientes
│   └── 🏪 EMPRESA: "Restaurante Norte" (Monterrey)
│       ├── 👤 Ana García (Gerente)
│       └── 📊 SUS DATOS: COMPLETAMENTE SEPARADOS
│
└── CLIENTE 2: "Cadena de Farmacias XYZ"
    ├── 💳 Plan: Empresarial ($150,000/mes)
    ├── 📦 Módulos: Dashboard, Productos, Inventario, CRM
    ├── 🏪 EMPRESA: "Farmacia Reforma"
    └── 🏪 EMPRESA: "Farmacia Insurgentes"
```

### 🎯 Ejemplo Práctico del Modelo de Precios

**CLIENTE: "Grupo Restaurantero ABC"**
```
Plan Profesional: $79,000 pesos/mes
├── ✅ Incluye: 1 empresa + 10 usuarios + 3 módulos básicos
├── ➕ Extra: 1 empresa adicional = $25,000/mes
├── ➕ Extra: 15 usuarios adicionales = $6,000/mes cada uno = $90,000/mes
├── ➕ Extra: 2 módulos adicionales = $20,000/mes cada uno = $40,000/mes
└── 💰 TOTAL: $79,000 + $25,000 + $90,000 + $40,000 = $234,000/mes
```

### 🔒 ¿Cómo Funciona la Separación de Datos?

#### Situación:
- Juan trabaja en "Restaurante Centro"
- Ana trabaja en "Restaurante Norte"
- Ambos restaurantes son del mismo cliente, pero están en ciudades diferentes

#### Lo que pasa cuando Juan inicia sesión:
1. El sistema detecta que Juan pertenece a "Restaurante Centro"
2. Juan SOLO puede ver:
   - Los productos de SU restaurante
   - Los clientes de SU restaurante
   - Los usuarios de SU restaurante
3. Juan NO puede ver NADA de "Restaurante Norte"

#### ¿Por qué es importante esto?
- **Privacidad**: Cada sucursal maneja sus propios datos
- **Competencia interna**: Evita conflictos entre sucursales
- **Seguridad**: Si alguien hackea una sucursal, no compromete las otras
- **Rendimiento**: Cada usuario solo carga sus datos, el sistema es más rápido

---

## � ¿Qué es la "Modularización"? (Proyecto Recién Completado)

### 🎯 El Problema que Resolvimos

Antes, todo el código estaba "mezclado" en una sola carpeta. Era como tener todos los documentos de la empresa en un solo cajón: difícil de encontrar, organizar y mantener.

### 🏗️ La Solución: Dividir en Módulos

Ahora el sistema está organizado como un edificio de oficinas:

```
🏢 AG Business Suite
│
├── 🏛️ MÓDULO CORE (El Núcleo - Siempre Activo)
│   ├── 👑 Gestión de clientes y empresas
│   ├── 💰 Planes y suscripciones
│   ├── 🔐 Seguridad y permisos
│   ├── 🏠 Separación de datos (multitenant)
│   └── ⚙️ Configuración básica del sistema
│
├── 📦 MÓDULO PRODUCTOS (Primer Módulo de Negocio)
│   ├── 📝 Catálogo de productos
│   ├── 🏷️ Precios y categorías
│   └── 📸 Imágenes y descripciones
│
├── �📊 MÓDULO INVENTARIO (Futuro)
│   ├── 📈 Control de stock
│   ├── 🚚 Entradas y salidas
│   └── ⚠️ Alertas de stock bajo
│
└── 👥 MÓDULO CRM (Futuro)
    ├── 🎯 Gestión de clientes
    ├── 📞 Historial de contactos
    └── 💼 Oportunidades de venta
```

### 🎯 Beneficios de la Modularización

#### 🏢 **Para la Empresa**
- **Escalabilidad**: Podemos agregar nuevos módulos sin tocar los existentes
- **Mantenimiento**: Si hay un problema en Inventario, no afecta a Productos
- **Ventas**: Podemos vender módulos por separado (más ingresos)

#### 👥 **Para el Equipo de Desarrollo**
- **Organización**: Cada desarrollador puede trabajar en su módulo
- **Velocidad**: Cambios más rápidos porque el código está ordenado
- **Calidad**: Menos errores porque cada módulo es independiente

#### 💰 **Para los Clientes**
- **Flexibilidad**: Solo pagan por lo que necesitan
- **Crecimiento**: Pueden agregar módulos cuando crezcan
- **Personalización**: Cada industria puede tener sus módulos específicos

### 📁 Nueva Estructura de Archivos

**Después (Organizado por módulos):**
```
Modules/
├── Core/ (Solo funciones del núcleo)
│   ├── app/Models/ (Cliente, Empresa, Plan, Modulo)
│   ├── app/Helpers/ (TenantHelper)
│   ├── app/Http/Middleware/ (TenantMiddleware)
│   ├── app/Traits/ (TenantScope)
│   ├── database/migrations/ (Tablas del núcleo)
│   └── database/seeders/ (Datos de ejemplo)
│
└── [FuturosModulos]/ (Módulos de negocio)
    ├── Productos/
    ├── Inventario/
    └── CRM/
```

### 🔍 ¿Cómo Verificar que Todo Funciona?

#### Opción 1: Comando Simple
```bash
php artisan tinker --execute="echo 'Tablas creadas: ' . count(DB::select('SHOW TABLES'));"
```
Debe mostrar: "Tablas creadas: 19" (contando todas las tablas)

#### Opción 2: Ver los Datos
```bash
php artisan tinker --execute="dump(Modules\Core\Models\Cliente::count());"
```
Debe mostrar: "2" (AG Business Suite + Grupo Restaurantero ABC)

#### Opción 3: Ver Empresa Específica
```bash
php artisan tinker --execute="dump(Modules\Core\Models\Empresa::where('nombre', 'AG Business Suite')->first()->toArray());"
```
Debe mostrar todos los datos de la empresa matriz con información de México.
precio_usuario_adicional_anual DECIMAL(8,2)
precio_empresa_adicional_mensual DECIMAL(8,2)
precio_empresa_adicional_anual DECIMAL(8,2)

-- Límites base incluidos
limite_empresas INTEGER DEFAULT 1
limite_usuarios INTEGER DEFAULT 10

-- Control de expansión
permite_empresas_adicionales BOOLEAN DEFAULT false
permite_usuarios_adicionales BOOLEAN DEFAULT false
maximo_empresas_totales INTEGER NULL    -- NULL = ilimitado
maximo_usuarios_totales INTEGER NULL    -- NULL = ilimitado

-- Características técnicas
limite_almacenamiento_gb INTEGER DEFAULT 1
soporte_prioritario BOOLEAN DEFAULT false
backup_automatico BOOLEAN DEFAULT false
api_acceso BOOLEAN DEFAULT false

-- Configuración
orden INTEGER DEFAULT 0
activo BOOLEAN DEFAULT true
destacado BOOLEAN DEFAULT false        -- Plan "recomendado"
caracteristicas JSON                   -- Array de features
configuracion JSON                     -- Configuraciones específicas
```

#### 7. `clientes` (Entidades de Facturación)
```sql
-- Información básica
id BIGINT PRIMARY KEY
nombre VARCHAR              -- Nombre comercial
email VARCHAR UNIQUE        -- Email principal
telefono VARCHAR
direccion TEXT
contacto VARCHAR           -- Persona de contacto

-- Suscripción
plan_id BIGINT             -- FK a planes
fecha_inicio_suscripcion DATE
fecha_fin_suscripcion DATE  -- NULL = sin vencimiento
activo BOOLEAN DEFAULT true
metadata JSON              -- Configuraciones adicionales

-- Datos fiscales básicos (agregados por migración adicional)
razon_social VARCHAR       -- Razón social completa
rfc VARCHAR                -- RFC/NIT/RUC según país
codigo_pais VARCHAR(3) DEFAULT 'MEX'     -- "MEX", "COL", "USA"
pais VARCHAR DEFAULT 'México'            -- "México", "Colombia"

-- Dirección fiscal (simplificada)
direccion_fiscal VARCHAR
ciudad_fiscal VARCHAR
estado_fiscal VARCHAR
codigo_postal_fiscal VARCHAR

-- Configuración fiscal
regimen_fiscal ENUM DEFAULT 'general'    -- 'general', 'simplificado_confianza', etc.
uso_cfdi ENUM DEFAULT 'G03'              -- 'G01', 'G02', 'G03', etc. (específico México)

-- Email para recibos y configuración de cobro
email_facturacion VARCHAR               -- Email específico para recibos
auto_facturacion BOOLEAN DEFAULT true   -- Cobro automático habilitado

-- Timestamps
created_at TIMESTAMP
updated_at TIMESTAMP
```

#### 8. `empresas` (Tenants - Unidades Operativas)
```sql
-- Clave primaria
id BIGINT PRIMARY KEY

-- Relación
cliente_id BIGINT          -- FK a clientes (CASCADE)

-- Información básica
nombre VARCHAR             -- Nombre de la empresa/sucursal
codigo_pais VARCHAR(3)     -- "MEX", "COL", "USA"
pais VARCHAR              -- "México", "Colombia"
ciudad VARCHAR
direccion TEXT
telefono VARCHAR
email VARCHAR
rfc VARCHAR               -- RFC/NIT/RUC según país
logo VARCHAR              -- Path del logo

-- Configuración regional
timezone VARCHAR DEFAULT 'America/Mexico_City'
moneda VARCHAR(3) DEFAULT 'MXN'
activo BOOLEAN DEFAULT true

-- Configuración específica
configuracion JSON         -- Settings específicos de la empresa

-- Timestamps
created_at TIMESTAMP
updated_at TIMESTAMP

-- Constraints e índices
INDEX(cliente_id, activo)                -- Búsquedas por cliente y estado
UNIQUE(cliente_id, nombre)               -- Nombres únicos por cliente
```

#### 9. `modulos` (Catálogo de Módulos)
```sql
-- Clave primaria
id BIGINT PRIMARY KEY

-- Identificación
nombre VARCHAR             -- "Productos", "Inventario", "CRM"
slug VARCHAR UNIQUE        -- "productos", "inventario", "crm"
categoria VARCHAR          -- "Inventario", "Ventas", "Producción", etc.
icono VARCHAR              -- Icono para UI (clase CSS)
descripcion TEXT           -- Descripción detallada

-- Control
orden INTEGER DEFAULT 0   -- Orden de visualización
activo BOOLEAN DEFAULT true

-- Metadata
configuracion JSON         -- Configuraciones del módulo

-- Timestamps
created_at TIMESTAMP
updated_at TIMESTAMP

-- Índices
INDEX(categoria, orden)    -- Ordenamiento por categoría
INDEX(activo)              -- Filtrado por estado
```

#### 10. `cliente_modulo` (Pivot - Módulos por Cliente)
```sql
-- Clave primaria
id BIGINT PRIMARY KEY

-- Relaciones
cliente_id BIGINT          -- FK a clientes (CASCADE)
modulo_id BIGINT          -- FK a modulos (CASCADE)

-- Control de activación
activo BOOLEAN DEFAULT true              -- Módulo activo para este cliente
fecha_activacion DATE                    -- Cuándo se activó el módulo
fecha_vencimiento DATE NULL              -- Cuándo vence (NULL = sin vencimiento)

-- Configuración específica
configuracion JSON NULL                  -- Configuración específica del módulo para este cliente

-- Timestamps
created_at TIMESTAMP
updated_at TIMESTAMP

-- Constraints e índices
UNIQUE(cliente_id, modulo_id)           -- Un cliente no puede tener el mismo módulo duplicado
INDEX(cliente_id, activo)               -- Búsquedas por cliente y estado
INDEX(fecha_vencimiento)                -- Control de vencimientos
```

#### 11. `users` + campos multitenant
```sql
-- Campos base de Laravel
id BIGINT PRIMARY KEY
name VARCHAR
email VARCHAR UNIQUE
email_verified_at TIMESTAMP
password VARCHAR
remember_token VARCHAR
created_at TIMESTAMP
updated_at TIMESTAMP

-- Campos multitenant agregados
tipo_usuario ENUM('super_admin', 'empresa') DEFAULT 'empresa'  -- Tipo de usuario
empresa_id BIGINT NULL     -- FK a empresas (NULL para super_admin, CASCADE)
activo BOOLEAN DEFAULT true    -- Estado del usuario
ultimo_acceso TIMESTAMP NULL  -- Tracking de acceso

-- Constraints
FOREIGN KEY (empresa_id) REFERENCES empresas(id) ON DELETE CASCADE
```

#### 12. Extensiones adicionales a `clientes` (Facturación SaaS)
**Migración**: `2025_06_13_233047_agregar_campos_facturacion_a_clientes_table.php`

```sql
-- Datos fiscales completos
razon_social VARCHAR       -- Razón social completa
rfc VARCHAR               -- RFC/NIT/RUC según país
codigo_pais VARCHAR(3) DEFAULT 'MEX'
pais VARCHAR DEFAULT 'México'

-- Dirección fiscal detallada
direccion_fiscal VARCHAR
ciudad_fiscal VARCHAR
estado_fiscal VARCHAR
codigo_postal_fiscal VARCHAR

-- Configuración fiscal específica por país
regimen_fiscal ENUM DEFAULT 'general'
-- Valores: 'general', 'simplificado_confianza', 'fisica_actividad_empresarial',
--          'incorporacion_fiscal', 'opcional_grupos_sociedades', 'sueldos_salarios',
--          'arrendamiento', 'actividades_agricolas', 'otros'

-- Uso CFDI específico para México
uso_cfdi ENUM DEFAULT 'G03'
-- Valores: 'G01' (Adquisición de mercancías), 'G02' (Devoluciones), 'G03' (Gastos en general),
--          'I01' a 'I08' (Inversiones), 'D01' a 'D10' (Deducciones), 'P01', 'S01'

-- Configuración de facturación
email_facturacion VARCHAR    -- Email específico para recibos
auto_facturacion BOOLEAN DEFAULT true  -- Cobro automático habilitado
```

#### 13. Extensiones a `permissions` (Categorización y orden)
**Migración**: `2025_06_15_001850_add_description_category_orden_to_permissions_table.php`

```sql
-- Campos base de Spatie Permission
id BIGINT PRIMARY KEY
name VARCHAR
guard_name VARCHAR
created_at TIMESTAMP
updated_at TIMESTAMP

-- Campos agregados para mejor organización
description VARCHAR NULL   -- Descripción del permiso
category VARCHAR NULL      -- Categoría del permiso
orden INTEGER NULL         -- Orden para mostrar en UI
```

#### 14. Extensiones a `roles` (Descripción)
**Migración**: `2025_06_15_001926_add_description_to_roles_table.php`

```sql
-- Campos base de Spatie Permission
id BIGINT PRIMARY KEY
name VARCHAR
guard_name VARCHAR
created_at TIMESTAMP
updated_at TIMESTAMP

-- Campo agregado
description VARCHAR NULL   -- Descripción del rol
```

#### 15. Tablas adicionales de Spatie Permission
**Migración**: `2025_06_13_201155_create_permission_tables.php`

- `model_has_permissions` - Permisos directos a modelos
- `model_has_roles` - Roles asignados a modelos
- `role_has_permissions` - Permisos asignados a roles

---

## ️ Guía Completa para Crear Nuevos Módulos

### 📝 Ejemplo Práctico: Módulo Onboarding (Registro de Clientes)

Durante la creación del módulo **Onboarding**, nos encontramos con varios errores comunes que se repetirán al crear futuros módulos. Aquí documentamos cada problema y su solución.

#### 🚀 Paso 1: Crear el Módulo Base

```bash
# Crear módulo usando nwidart/laravel-modules
php artisan module:make NombreDelModulo
```

#### ⚠️ **Error Común #1: ServiceProvider no encontrado**

**❌ Error**: `Class "Modules\NombreModulo\app\Providers\NombreModuloServiceProvider" not found`

**🔧 Solución**: El ServiceProvider no está registrado en el composer.json del módulo.

**📝 Archivo**: `Modules/NombreModulo/composer.json`
```json
{
    "extra": {
        "laravel": {
            "providers": [
                "Modules\\NombreModulo\\app\\Providers\\NombreModuloServiceProvider"
            ],
            "aliases": {}
        }
    }
}
```

#### ⚠️ **Error Común #2: Clases no cumplen PSR-4**

**❌ Error**: `Class does not comply with psr-4 autoloading standard. Skipping.`

**🔧 Solución**: Agregar el autoload del módulo al composer.json principal.

**📝 Archivo**: `composer.json` (raíz del proyecto)
```json
{
    "autoload": {
        "psr-4": {
            "App\\": "app/",
            "Modules\\Core\\Models\\": "Modules/Core/app/Models/",
            "Modules\\Core\\Helpers\\": "Modules/Core/app/Helpers/",
            "Modules\\Core\\Http\\": "Modules/Core/app/Http/",
            "Modules\\Core\\Traits\\": "Modules/Core/app/Traits/",
            "Modules\\Core\\Providers\\": "Modules/Core/app/Providers/",
            "Modules\\NombreModulo\\app\\": "Modules/NombreModulo/app/"
        }
    }
}
```

**🔄 Comando necesario después de modificar composer.json**:
```bash
composer dump-autoload
```

#### ⚠️ **Error Común #3: Imports incorrectos de Core**

**❌ Error**: `Class "Modules\Core\app\Models\Plan" not found`

**🔧 Solución**: Los modelos de Core están en `Modules\Core\Models\`, no en `Modules\Core\app\Models\`.

**❌ Import incorrecto**:
```php
use Modules\Core\app\Models\Plan;
```

**✅ Import correcto**:
```php
use Modules\Core\Models\Plan;
```

#### ⚠️ **Error Común #4: Vistas no encontradas**

**❌ Error**: `No hint path defined for [nombremodulo]`

**🔧 Solución**: Registrar las vistas en el AppServiceProvider.

**📝 Archivo**: `app/Providers/AppServiceProvider.php`
```php
public function boot(): void
{
    // Registrar las vistas del módulo
    $this->loadViewsFrom(base_path('Modules/NombreModulo/resources/views'), 'nombremodulo');
}
```

**🔄 Comando necesario después**:
```bash
php artisan view:clear
```

#### ⚠️ **Error Común #5: Rutas no registradas**

**❌ Error**: Las rutas del módulo no se cargan automáticamente.

**🔧 Solución**: Registrar las rutas en el RouteServiceProvider principal.

**📝 Archivo**: `app/Providers/RouteServiceProvider.php`
```php
$this->routes(function () {
    Route::middleware('api')
        ->prefix('api')
        ->group(base_path('routes/api.php'));

    Route::middleware('web')
        ->group(base_path('routes/web.php'));
        
    // Rutas del módulo
    Route::middleware('web')
        ->group(base_path('Modules/NombreModulo/routes/web.php'));
});
```

#### ⚠️ **Error Común #6: Servicios no registrados**

**❌ Error**: Los servicios del módulo no se pueden inyectar.

**🔧 Solución**: Registrar servicios en AppServiceProvider.

**📝 Archivo**: `app/Providers/AppServiceProvider.php`
```php
public function register(): void
{
    // Registrar servicios del módulo
    $this->app->bind(
        \Modules\NombreModulo\app\Services\NombreModuloService::class,
        \Modules\NombreModulo\app\Services\NombreModuloService::class
    );
}
```

### 🎯 Checklist Completo para Nuevos Módulos

#### ✅ **Paso a Paso Sin Errores**:

1. **Crear módulo**:
   ```bash
   php artisan module:make NombreModulo
   ```

2. **Configurar composer.json del módulo**:
   ```json
   {
       "extra": {
           "laravel": {
               "providers": [
                   "Modules\\NombreModulo\\app\\Providers\\NombreModuloServiceProvider"
               ]
           }
       }
   }
   ```

3. **Agregar autoload al composer.json principal**:
   ```json
   "Modules\\NombreModulo\\app\\": "Modules/NombreModulo/app/"
   ```

4. **Regenerar autoload**:
   ```bash
   composer dump-autoload
   ```

5. **Registrar vistas en AppServiceProvider**:
   ```php
   $this->loadViewsFrom(base_path('Modules/NombreModulo/resources/views'), 'nombremodulo');
   ```

6. **Registrar rutas en RouteServiceProvider**:
   ```php
   Route::middleware('web')->group(base_path('Modules/NombreModulo/routes/web.php'));
   ```

7. **Registrar servicios en AppServiceProvider** (si es necesario):
   ```php
   $this->app->bind(ServiceClass::class, ServiceClass::class);
   ```

8. **Limpiar cachés**:
   ```bash
   php artisan view:clear
   php artisan route:clear
   php artisan config:clear
   ```

9. **Verificar rutas**:
   ```bash
   php artisan route:list --name=nombremodulo
   ```

### 📋 **Estructura Estándar de un Módulo

```
Modules/NombreModulo/
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   └── NombreModuloController.php
│   │   └── Requests/
│   │       └── FormRequest.php
│   ├── Services/
│   │   └── NombreModuloService.php
│   └── Providers/
│       └── NombreModuloServiceProvider.php
├── resources/views/
│   ├── index.blade.php
│   └── create.blade.php
├── routes/
│   └── web.php
└── composer.json (configurado correctamente)
```

### 🎯 **Buenas Prácticas**

1. **Naming**: Usar PascalCase para nombres de módulos (`Onboarding`, `Productos`)
2. **Namespaces**: Seguir PSR-4 estrictamente
3. **Servicios**: Encapsular lógica de negocio en Service classes
4. **Validaciones**: Usar Form Requests para validaciones
5. **Vistas**: Usar el namespace del módulo (`nombremodulo::vista`)
6. **Rutas**: Agrupar bajo prefijos descriptivos
7. **Imports**: Verificar siempre los namespaces de Core

### 🚫 **Errores a Evitar**

1. ❌ No configurar composer.json del módulo
2. ❌ Olvidar agregar autoload al composer principal
3. ❌ No registrar vistas en AppServiceProvider
4. ❌ Imports incorrectos de modelos Core
5. ❌ No regenerar autoload después de cambios
6. ❌ No limpiar cachés después de cambios
7. ❌ No verificar rutas después de la creación

---

## 🎯 Módulo Onboarding - Registro de Clientes SaaS

### 📋 Descripción del Módulo

El módulo **Onboarding** fue el primer módulo de negocio creado después de la reestructuración modular. Su propósito es permitir que nuevos clientes se registren de forma autoservicio en la plataforma AG Business Suite.

### 🚀 Funcionalidades Implementadas

#### 📝 Registro Público de Clientes
- **Ruta**: `/register` (acceso público, sin autenticación)
- **Formulario**: Captura datos básicos del cliente y su primera empresa
- **Validaciones**: Email único, teléfono válido, campos requeridos
- **Proceso**: Crea automáticamente cliente y empresa en una transacción

#### 🔧 Arquitectura del Módulo

**📁 Estructura**:
```
Modules/Onboarding/
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   └── OnboardingController.php
│   │   └── Requests/
│   │       └── RegisterClientRequest.php
│   ├── Services/
│   │   └── OnboardingService.php
│   └── Providers/
│       └── OnboardingServiceProvider.php
├── resources/views/
│   ├── register.blade.php
│   └── success.blade.php
├── routes/
│   └── web.php
└── composer.json
```

#### 🛠️ Componentes Técnicos

**OnboardingController**: 
- Maneja las rutas públicas de registro
- Usa `RegisterClientRequest` para validaciones
- Delega lógica de negocio a `OnboardingService`

**RegisterClientRequest**:
- Validaciones de campos requeridos
- Verificación de email único
- Validación de formato de teléfono

**OnboardingService**:
- Encapsula la lógica de creación de cliente y empresa
- Maneja transacciones de base de datos
- Asigna plan básico por defecto
- Configura módulos iniciales

### 🎯 Flujo de Registro Completo

1. **Usuario accede** a `/register`
2. **Completa formulario** con datos del cliente y empresa
3. **Sistema valida** información usando `RegisterClientRequest`
4. **OnboardingService procesa**:
   - Crea registro en tabla `clientes`
   - Crea registro en tabla `empresas` 
   - Asigna plan básico
   - Activa módulos por defecto (Dashboard)
5. **Redirección** a página de éxito con instrucciones

### ⚙️ Configuración del Módulo

#### 🔗 Rutas Registradas
```php
// Archivo: Modules/Onboarding/routes/web.php
Route::get('/register', [OnboardingController::class, 'showRegister'])->name('onboarding.register');
Route::post('/register', [OnboardingController::class, 'processRegister'])->name('onboarding.process');
Route::get('/register/success', [OnboardingController::class, 'showSuccess'])->name('onboarding.success');
```

#### 🎨 Vistas Implementadas
- **register.blade.php**: Formulario de registro con Bootstrap
- **success.blade.php**: Página de confirmación con próximos pasos

#### 🔄 Integración con Core
- Usa modelos de `Modules\Core\Models\`
- Respeta arquitectura multitenant
- Compatible con sistema de permisos
- Maneja configuración de países (México por defecto)

### ✅ Estados del Registro

#### Cliente Recién Registrado:
- **Estado**: Activo
- **Plan**: Básico (por defecto)
- **Módulos**: Dashboard activado
- **Empresa**: Una empresa inicial configurada
- **Usuario**: No se crea automáticamente (se debe activar por separado)

### 🔮 Mejoras Futuras

- **Verificación por email**: Envío de código de confirmación
- **Selección de plan**: Permitir elegir plan durante registro
- **Configuración de país**: Selector de país con configuraciones específicas
- **Integración con pagos**: Proceso de pago automático
- **Dashboard de onboarding**: Panel de progreso para nuevos clientes

### 🎨 Adaptación al Tema UI

La vista de registro del módulo Onboarding ha sido **adaptada al tema principal** del sistema usando la estructura de `signup-basic.blade.php`.

#### ✅ Cambios Realizados:

**1. Layout y Estructura:**
- Cambiado de layout personalizado a `@extends('layouts.master')`
- Adaptada la estructura HTML al sistema de grid del tema (col-span-12, etc.)
- Implementado el sistema de clases CSS del tema (form-control, ti-btn, etc.)

**2. Componentes UI:**
- **Campos de formulario**: Adaptados a `form-control form-control-lg`
- **Botones**: Usando clases `ti-btn ti-btn-lg bg-primary`
- **Iconos**: Cambiados a RemixIcon (`ri-*`) en lugar de FontAwesome
- **Alerts**: Usando sistema de alertas del tema
- **Input groups**: Para campos de contraseña con botón mostrar/ocultar

**3. Funcionalidades Mantenidas:**
- ✅ Todos los campos del formulario original
- ✅ Validaciones de Laravel (FormRequest)
- ✅ Manejo de errores
- ✅ Campos adicionales (teléfono, contacto)
- ✅ Términos y condiciones
- ✅ Selección de plan
- ✅ Información de empresa

**4. Funcionalidades Agregadas:**
- 🆕 Mostrar/ocultar contraseña con JavaScript
- 🆕 Campos organizados en grid responsivo
- 🆕 Iconos informativos (Seguro, En la Nube, Soporte 24/7)
- 🆕 Mejor experiencia visual integrada al tema

#### 📝 Guía para Adaptar Vistas al Tema:

```blade
// 1. Cambiar layout
@extends('layouts.master')

// 2. Estructura de grid
<div class="grid grid-cols-12 gap-y-4">
    <div class="xl:col-span-6 col-span-12">
        <!-- Contenido -->
    </div>
</div>

// 3. Campos de formulario
<input type="text" class="form-control form-control-lg w-full !rounded-md">
<select class="form-control form-control-lg w-full !rounded-md">

// 4. Botones
<button class="ti-btn ti-btn-lg bg-primary text-white !font-medium">

// 5. Iconos RemixIcon
<i class="ri-user-line mr-2"></i>
<i class="ri-mail-line mr-2"></i>
<i class="ri-lock-line mr-2"></i>
```

#### 🔗 URL de Acceso:
- **Desarrollo**: `http://localhost:8000/register/client`
- **Producción**: `https://tu-dominio.com/register/client`

La nueva vista mantiene toda la funcionalidad del módulo Onboarding pero con una apariencia moderna y consistente con el tema principal del sistema.

### 📝 Documentación de Errores Resueltos

Durante el desarrollo del módulo Onboarding se encontraron y resolvieron los siguientes errores que sirven como referencia para futuros módulos:

1. **ServiceProvider no registrado** → Solucionado en composer.json del módulo
2. **Autoload PSR-4 incorrecto** → Corregido en composer.json principal  
3. **Imports incorrectos de Core** → Documentado namespace correcto
4. **Vistas no encontradas** → Registradas en AppServiceProvider
5. **Rutas no cargadas** → Registradas en RouteServiceProvider
6. **Servicios no inyectables** → Registrados en AppServiceProvider

Todos estos errores y sus soluciones están documentados en la [Guía para Crear Nuevos Módulos](#%EF%B8%8F-guía-completa-para-crear-nuevos-módulos).

### ✅ Verificación del ProductionSeeder

El `ProductionSeeder` ha sido **probado y funciona correctamente** con la estructura modular:

#### 🚀 Comando de Prueba
```bash
php artisan db:seed --class=ProductionSeeder
```

#### ✅ Resultados Verificados
- **4 planes** de suscripción creados correctamente
- **5 módulos** del sistema (4 Core + 1 Negocio)
- **3 empresas** (incluye empresa matriz AG Business Suite)
- **4 usuarios** (incluye super admin)
- **Sistema de permisos** configurado
- **Super Admin**: `admin@agbusinesssuite.com` / `AGBusiness*2025`

#### 🔧 Corrección Aplicada
Se corrigió el namespace del import en `ProductionSeeder.php`:
```php
// ✅ Correcto
use Modules\Core\Database\Seeders\EmpresaSaaSSeeder;

// ❌ Incorrecto (anterior)
use Modules\Core\database\seeders\EmpresaSaaSSeeder;
```

El ProductionSeeder está listo para ser usado en producción y crea toda la infraestructura necesaria sin datos de prueba.

---

## 🔑 Gestión de Roles y Permisos

AG Business Suite utiliza Spatie Permission para implementar un sistema avanzado de roles y permisos que se integra con la arquitectura multitenant.

### 👑 Tipos de Roles

El sistema tiene dos niveles de roles:

1. **Roles de Sistema**:
   - **Super Admin**: Control total sobre todas las empresas y el sistema global
   - **Admin Matriz**: Administrador de la empresa matriz

2. **Roles por Empresa**:
   - **Admin Empresa**: Administrador de una empresa específica
   - **Operador**: Usuario normal con acceso limitado
   - **Consulta**: Usuario con acceso solo de lectura
   - Roles personalizados por empresa

### 🛡️ Sistema de Permisos

Los permisos están organizados en categorías para facilitar su gestión:

```
📊 PERMISOS DE SISTEMA
├── 🔒 auth.*         # Autenticación y control de acceso
├── 🏢 empresas.*     # Gestión de empresas
└── 👥 usuarios.*     # Gestión de usuarios

📦 PERMISOS DE MÓDULOS (Ejemplo: Productos)
├── 📋 productos.ver
├── 📝 productos.crear
├── 🔄 productos.editar
└── ❌ productos.eliminar
```

### 🔐 Verificación de Permisos

```php
// En controladores
public function store(Request $request)
{
    // Verificar si tiene permiso
    if (!auth()->user()->can('productos.crear')) {
        abort(403, 'No tiene permiso para crear productos');
    }
    
    // Continuar con la creación del producto
}

// En vistas Blade
@can('productos.editar')
    <a href="{{ route('productos.edit', $producto) }}" class="btn btn-primary">Editar</a>
@endcan
```

### 🌱 Seeders de Roles y Permisos

La creación inicial de roles y permisos se realiza mediante seeders:

```php
// En CoreSeeder.php
public function run()
{
    // Crear permisos
    $permisos = [
        'usuarios.ver', 'usuarios.crear', 'usuarios.editar', 'usuarios.eliminar',
        // ...más permisos
    ];
    
    foreach ($permisos as $permiso) {
        Permission::firstOrCreate(['name' => $permiso]);
    }
    
    // Crear roles
    $rolAdmin = Role::firstOrCreate(['name' => 'Admin Empresa']);
    $rolOperador = Role::firstOrCreate(['name' => 'Operador']);
    
    // Asignar permisos a roles
    $rolAdmin->syncPermissions($permisos);
    $rolOperador->syncPermissions(['usuarios.ver', 'productos.ver', 'productos.crear']);
}
```

## ✅ Verificación del Sistema

Esta sección proporciona comprobaciones para verificar que todos los componentes del sistema estén funcionando correctamente.

### 📋 Lista de Verificación Post-Instalación

Ejecuta estas comprobaciones para asegurarte de que el sistema está correctamente instalado:

1. **Verificar carga de módulos**:
   ```bash
   php artisan module:list
   ```
   ✅ Debe mostrar "Core" y "Onboarding" como [Enabled]

2. **Verificar migraciones**:
   ```bash
   php artisan migrate:status
   ```
   ✅ Todas las migraciones deben estar marcadas como [✓]

3. **Verificar seeders**:
   ```bash
   # Los seeders habrán creado datos iniciales
   php artisan tinker
   > App\Models\User::count()     # Debe ser > 0
   > Modules\Core\app\Models\Empresa::count() # Debe ser > 0
   ```

4. **Verificar multitenancy**:
   ```php
   # En tinker
   > $user = App\Models\User::where('tipo_usuario', 'empresa')->first();
   > $user->empresa                # Debe mostrar la empresa asociada
   > app()->make('current_tenant') # Debe estar definido al autenticarse
   ```

5. **Verificar carga de frontend**:
   - Visitar `http://localhost:8000/login`
   - Los assets CSS y JS deben cargarse correctamente
   - No debe haber errores de consola

### 🔄 Comandos Útiles para Mantenimiento

```bash
# Regenerar caché después de cambios
php artisan optimize:clear

# Ver rutas registradas (incluidas las de módulos)
php artisan route:list

# Resolver problemas de autoloading
composer dump-autoload -o

# Verificar estado de los módulos
php artisan module:list
```

---

# Sistema Multitenant: Componentes Clave

## 🛡️ Sistema Multitenant: Componentes Clave

La implementación técnica del sistema multitenant en AG Business Suite se basa en varios componentes clave que trabajan juntos para garantizar el aislamiento de datos y la correcta segregación de información entre diferentes empresas.

### 🔍 TenantHelper: El Corazón del Sistema Multitenant

El `TenantHelper` es una clase helper que proporciona funciones esenciales para el funcionamiento del sistema multitenant:

```php
namespace Modules\Core\app\Helpers;

use Modules\Core\app\Models\Empresa;

class TenantHelper
{
    /**
     * Obtener la empresa (tenant) actual
     */
    public static function current(): ?Empresa
    {
        // Intentar obtener del contexto de la aplicación
        if (app()->bound('current_tenant')) {
            return app('current_tenant');
        }

        // Fallback: obtener desde el usuario autenticado
        $user = Auth::user();
        if ($user && !$user->esSuperAdmin()) {
            return $user->empresa;
        }

        return null;
    }

    /**
     * Obtener ID de la empresa actual
     */
    public static function currentId(): ?int
    {
        $tenant = self::current();
        return $tenant?->id;
    }

    // Otros métodos útiles...
}
```

### 🔒 TenantScope: Filtrado Automático de Datos

El `TenantScope` es un trait que se aplica a los modelos que deben respetar la separación de datos por tenant:

```php
namespace Modules\Core\app\Traits;

trait TenantScope
{
    /**
     * Boot del trait
     */
    protected static function bootTenantScope()
    {
        // Aplicar scope automático en consultas
        static::addGlobalScope(new TenantGlobalScope);

        // Establecer empresa_id automáticamente al crear
        static::creating(function (Model $model) {
            if (!$model->empresa_id) {
                $model->empresa_id = TenantHelper::currentId();
            }
        });
    }
    
    // Otros métodos...
}
```

### 🚦 TenantMiddleware: Control de Acceso por Tenant

El `TenantMiddleware` es un middleware que establece el contexto del tenant actual para cada solicitud:

```php
namespace Modules\Core\app\Http\Middleware;

class TenantMiddleware
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        $user = Auth::user();

        if (!$user) {
            return $next($request);
        }

        // Super Admin puede acceder a cualquier tenant
        if ($user->esSuperAdmin()) {
            $this->setTenantContext($request);
            return $next($request);
        }

        // Usuario normal debe tener empresa asignada
        if (!$user->empresa_id) {
            abort(403, 'Usuario sin empresa asignada');
        }

        $empresa = $user->empresa;
        $this->setTenantInContext($empresa, $request);

        return $next($request);
    }
    
    // Métodos auxiliares...
}
```

### 📋 Uso en Modelos

Para que un modelo respete la separación multitenant, solo necesita:

1. Tener un campo `empresa_id` en su tabla
2. Usar el trait `TenantScope`:

```php
use Modules\Core\app\Traits\TenantScope;

class MiModelo extends Model
{
    use TenantScope;
    
    // El resto del modelo...
}
```

### 🔄 Flujo de Aislamiento de Datos

El funcionamiento del aislamiento de datos se puede resumir así:

1. **Autenticación**: El usuario inicia sesión
2. **Middleware**: `TenantMiddleware` detecta la empresa del usuario
3. **Contexto**: Se establece la empresa actual en el contenedor de la aplicación
4. **Consultas**: Cada modelo con `TenantScope` filtra automáticamente por `empresa_id`
5. **Creación**: Los nuevos registros se asignan automáticamente a la empresa actual

### 🌐 Super Administradores

Los Super Administradores son un caso especial:

1. Pueden ver datos de cualquier tenant
2. Pueden cambiar de tenant mediante un selector
3. Las restricciones de tenant no se aplican a ellos

### 🎯 Ejemplo Práctico

Así es como funciona en la práctica:

1. El **Cliente A** tiene dos empresas: **Empresa A1** y **Empresa A2**
2. El **Usuario X** pertenece a la **Empresa A1**
3. El **Usuario Y** pertenece a la **Empresa A2**
4. Si el **Usuario X** consulta productos, solo ve los productos de la **Empresa A1**
5. Si el **Usuario Y** consulta productos, solo ve los productos de la **Empresa A2**
6. Un **Super Admin** puede ver todos los productos, o filtrar por empresa específica

Este aislamiento es fundamental para mantener la integridad y privacidad de los datos en un entorno multitenant.
