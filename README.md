# Nextcloud Passwords Desktop Client

An offline-capable, cross-platform, desktop client for the [Nextcloud Passwords app](https://apps.nextcloud.com/apps/passwords) app.
Currently, only reading is supported and no passwords can be added or modified. This is, because this client was created as a read-only offline client, since the browser extension works online only.

> [!WARNING]
> This application has not been independently audited for security vulnerabilities.
> Your master key will remain encrypted throughout the session and will not be recorded in system logs.
> For feedback, feel free to contact me at [leo@gehmasse.de](mailto:leo@gehmasse.de).

## Installation

-   requires php (tested with 8.4) and nodejs
-   navigate to project directory
-   run `npm install` and `composer install` to install dependencies
-   copy `.env.example` to `.env`
-   fill the NC\_\* variables at the end of the `.env` file
-   run `php artisan migrate` to create database
-   run `php artisan key:generate` to generate encryption key
-   run `npm run build` to compile the frontend

# Starting

-   run `php artisan serve` to start the application
-   open the shown url (probably [http://localhost:8000](http://localhost:8000)) in your browser
-   a command line application is available at `php artisan pwd`
