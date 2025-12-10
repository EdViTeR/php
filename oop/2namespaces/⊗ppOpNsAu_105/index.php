<?php
spl_autoload_register(function ($class_name) {
    $file_path = str_replace('\\', DIRECTORY_SEPARATOR, $class_name) . '.php';
    if (file_exists($file_path)) {
        require_once $file_path;
    }
});

use Core\Admin\Controller;
use Core\User;
use Project\User\Data;

$controller = new Controller;
echo $controller->getClass();
$user = new User;
echo $user->getClass();
$data = new Data;
echo $data->getClass();