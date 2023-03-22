<?php

namespace Core;


class Bootstrap
{
    public function boot()
    {
        define('CONFIG', ROOT . '/config');
        define('VIEWS', ROOT . '/app/Views');

        

        $databaseConfig = require CONFIG . '/database.php';

        // save DB connection params into constants for later usage
        define('DB_DSN', $databaseConfig['dsn']);
        define('DB_USERNAME', $databaseConfig['username']);
        define('DB_PASSWORD', $databaseConfig['password']);

        // load routes
        $routesConfig = require CONFIG . '/routes.php';
        define('ROUTES', $routesConfig);
    }
}