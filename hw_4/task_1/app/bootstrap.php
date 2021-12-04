<?php
spl_autoload_register(static function ($path) {
    require_once __DIR__ . '/engine/' . $path . '.php';
});

Router::run('routes.php');
