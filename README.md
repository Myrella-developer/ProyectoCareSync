# ProyectoCareSync

## Descripción

**Proyecto CareSync** es una aplicación web dedicada a la gestión del bienestar personal, desarrollada con Laravel y Breeze. La plataforma permite a los usuarios gestionar su bienestar a través de una tabla de workouts y una lista de workouts favoritos, y ofrece herramientas adicionales para administradores.

## Funcionalidades Principales

### 1. Registro y Autenticación de Usuarios
- **Registro de nuevos usuarios:** Los usuarios pueden crear una cuenta en la aplicación para acceder a todas las funcionalidades.
- **Inicio de sesión y cierre de sesión:** Permite a los usuarios iniciar y cerrar sesión de manera segura.

### 2. Perfiles de Usuario
- **Creación y edición de perfiles:** Los usuarios pueden configurar y actualizar su perfil con información personal como edad, peso y altura.
- **Foto de perfil y biografía:** Los usuarios tienen la opción de subir una foto de perfil y escribir una breve biografía.

### 3. Gestión de Workouts
- **Explorar workouts:** Los usuarios pueden ver una lista completa de workouts disponibles en la plataforma.
- **Agregar a favoritos:** Los usuarios pueden marcar workouts como favoritos para tener un acceso rápido a ellos más tarde.
- **Lista de favoritos:** Los usuarios pueden ver y gestionar sus workouts favoritos desde una sección dedicada en la aplicación.

### 4. Rol de Administrador
- **CRUD de Workouts:** Los administradores tienen acceso a un panel de control donde pueden:
  - **Crear nuevos workouts:** Añadir nuevos workouts a la plataforma.
  - **Editar workouts existentes:** Modificar la información de los workouts ya existentes.
  - **Eliminar workouts:** Borrar workouts que ya no sean necesarios o relevantes.

## Pasos para instalar el proyecto CareSync

1. **Clona el repositorio**

   Abre tu terminal y ejecuta el siguiente comando para clonar el repositorio:

   ```bash
   git clone <https://github.com/Myrella-developer/ProyectoCareSync.git>

2. **Accede al directorio del proyecto**

    Cambia al directorio del proyecto

    ```bash
    cd CareSync

3. **Instala las dependencias de PHP**

    Ejecuta el siguiente comando para instalar las dependencias de PHP usando Composer:

    ```bash
    composer install

4. **Copia el archivo de entorno**

    Crea un archivo .env a partir del archivo de ejemplo:

    ```bash
    cp .env.example .env

5. **Genera la clave de la aplicación**

    Ejecuta el siguiente comando para generar la clave de tu aplicación:

    ```bash
    php artisan key:generate

6. **Configura la base de datos**

    env
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=nombre_de_tu_base_de_datos
    DB_USERNAME=tu_usuario
    DB_PASSWORD=tu_contraseña

7. **Ejecuta las migraciones**

    ```bash
    php artisan migrate

8. **Rellena la base de datos con datos de prueba**

    ```bash
    php artisan db:seed

9. **Instala las dependencias de JavaScript**

    ```bash
    npm install

10. **Compila los archivos con Vite**

    ```bash
    npm run dev

11. **Inicia el servidor de desarrollo**

    ```bash
    php artisan serve

12. **Accede a la aplicación**

    Abre tu navegador y ve a http://localhost:8000 para ver la aplicación en acción.
    