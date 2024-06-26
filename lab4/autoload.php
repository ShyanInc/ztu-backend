<?php

spl_autoload_register(function ($class) {
    $path = str_replace('\\', '/', $class) . '.php';
    if (file_exists($path)) {
        include_once $path;
    } else {
        echo "File $path not found";
    }
});
