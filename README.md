# ProyectoCareSync

## Descripción

**Proyecto CareSync** es una aplicación web dedicada a la gestión del bienestar personal, desarrollada con Laravel y Breeze. La plataforma permite a los usuarios gestionar su bienestar a través de una tabla de workouts y una lista de workouts favoritos, y ofrece herramientas adicionales para administradores.

---
<div align="center">
  <img src="https://github.com/user-attachments/assets/d0427f35-0039-4d3d-bbe9-5c1bfae65c2a" style="max-width:100%; height:auto; border: 2px solid #000; border-radius: 10px;" alt="Página principal">
</div>
---

---

## Capturas de pantalla

<div style="display: flex; flex-wrap: wrap; gap: 10px;">
  <img src="https://github.com/user-attachments/assets/18f68388-d875-49a3-a11a-a85326fb0c62" width="170" alt="Registro">
  <img src="https://github.com/user-attachments/assets/1038423c-1df6-40c2-a0d7-45d24f264b44" width="170" alt="Página de usuario">
  <img src="https://github.com/user-attachments/assets/e5b1479c-d023-477c-9374-7fb3bf219fcf" width="170" alt="Página de ejercicios"> 
  <img src="https://github.com/user-attachments/assets/9b110247-8b7d-4aed-a3cc-e042dcd4c7c4" width="170" alt="Página de Administrador">
  <img src="https://github.com/user-attachments/assets/d7e5520d-0c7a-4f9e-b61b-4856d1748aca" width="170" alt="Página de crear ejercicios">
  <img src="https://github.com/user-attachments/assets/b912626d-7f39-4e4f-b389-8d4b2ceb3894" width="170" alt="Página de Ejericios editables">  
</div>

---

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
    cd ProyectoCareSync

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

    Asegúrate de configurar tu base de datos en el archivo .env

7. **Ejecuta las migraciones**

    ```bash
    php artisan migrate

8. **Rellena la base de datos con datos de prueba**

    ```bash
    php artisan db:seed

9. **Crea el enlance simbólico para el almacenamiento**

   Este paso es necesario para acceder a las imágenes y otros archivos que se almacenan en storage:

    ```bash
    php artisan storage:link

10. **Instala las dependencias de JavaScript**

    ```bash
    npm install

11. **Compila los archivos con Vite**

    ```bash
    npm run dev

12. **Inicia el servidor de desarrollo**

    ```bash
    php artisan serve

13. **Accede a la aplicación**

    Abre tu navegador y ve a http://localhost:8000 para ver la aplicación en acción.
