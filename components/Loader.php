<?php

function Loader($class_name)
{

    $array_paths = [
        '/models/',
        '/config/',
        '/components/',
        '/components/lib/',
        '/components/mailer/',
        '/components/users/',
        '/controllers/',
    ];

    foreach ($array_paths as $path) {

        $path = ROOT . $path . $class_name . '.php';

        if (is_file($path)) {
            include_once $path;
        }
    }
}