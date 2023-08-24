# ef-tasks

Este proyecto es una aplicación web desarrollada en Laravel que permite a los usuarios registrar tareas, marcarlas como completadas y gestionarlas de manera efectiva.

## Descripción

Este proyecto de Laravel tiene como objetivo proporcionar una plataforma simple para administrar tareas. Los usuarios pueden registrarse e iniciar sesión, lo que les permite crear nuevas tareas, marcarlas como completadas y eliminarlas según sea necesario. La aplicación también proporciona una vista general de los usuarios registrados y una división clara entre las tareas pendientes y completadas.

## Características

- Registro y inicio de sesión de usuarios.
- Vista general de usuarios y tareas pendientes / completadas.
- Lista de todas las tareas con capacidad para crear, marcar como completadas y eliminar.
- Utilización de Livewire para una experiencia dinámica y fluida.

## Requisitos del Sistema

- PHP 8.0.2
- Laravel Framework 9.19
- Livewire 2.12
- Alpine.js 3.12.3

## Instalación

1. Clona este repositorio.
2. Ejecuta `composer install` para instalar las dependencias de PHP.
3. Ejecuta `npm install` para instalar las dependencias de JavaScript.
4. Copia `.env.example` a `.env` y configura la base de datos y otros detalles.
5. Ejecuta `php artisan key:generate` para generar la clave de la aplicación.
6. Ejecuta `php artisan migrate` para migrar la base de datos.
7. Ejecuta `npm run dev` para compilar los activos.

## Uso

1. Ejecuta `php artisan serve` para iniciar el servidor de desarrollo.
2. Visita `http://localhost:8000` en tu navegador para acceder al proyecto.

## Contribución

Cualquier contribución es bienvenida. Si deseas colaborar, crea Pull Requests o Issues.

