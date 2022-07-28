# Contacts App

Aplicación web desarrollada en Laravel 9, usando webpack y bootstrap 5.
En esta web puedes **administrar tus contactos**.

## En esta app puedes

-   Registrar un usuario.
-   Iniciar sesión.
-   Almacenar, listar, editar, eliminar y ver contactos.

## Rutas

-   **Iniciar sesión:** /login

-   **Registrar usuario:** /register

-   **Crear contacto:** /contacts/create

-   **Ver todos los contactos:** /contacts

-   **Ver contacto individual:** /contacts/{id}/show

-   **Modificar contacto:** /contacts/{id}/edit

-   **Eliminar contacto:** /contacts/{id}

## Alcance

-   Generar usuarios.

-   Crear, ver, modificar y eliminar contactos.

-   Generar 9 días para uso gratuito.

-   Adquirir suscripciones.

## Pasos para instalar el repositorio de manera local:

1. Clonar el repositorio

```

git clone git@github.com:YennerS21/contacts-app-web.git`

cd contacts-app-web

```

2. Abrir carpeta y ejecutar el comando para instalar dependecias con composer:

```

composer install

```

3. Instalar dependecias con npm:

```

npm install

npm run dev

```

4. Crear base de datos local:

```

create database contacts_app

```

5. Configurar archivo .env

```

APP_NAME="Contacts App"

DB_DATABASE=[Nombre de la base de datos]

DB_USERNAME=root

DB_PASSWORD=



```

6. Generar el app-key :

```

APP_KEY=

php artisan key:generate

```

6. Ejecutar las migraciones:

```

php artisan migrate

```

7. Ejecutar servidor para ver el proyecto:

```

php artisan serve

```

Abrir navegador e ir al localhost y el puerto que indique la consola.

```

http:localhost:8000

```
