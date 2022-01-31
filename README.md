## Service Vehicle Utilization and Monitoring System

Steps to use:

-   Open Terminal (ex: gitbash)
-   git clone https://github.com/gasa-tech/svums.git
-   cd svums
-   composer install / composer require composer require phpoffice/phpspreadsheet --ignore-platform-reqs
-   cp .env.example .env
-   php artisan key:generate
-   NOT IN TERMINAL - create database
-   NOT IN TERMINAL - update DB_DATABASE=
-   php artisan migrate
-   php artisan serve
