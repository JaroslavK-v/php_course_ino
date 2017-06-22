<?php

spl_autoload_register(function($class) {
    
    //полное имя файла класса
    
    $fileName = __DIR__ . DIRECTORY_SEPARATOR . 'classes' . DIRECTORY_SEPARATOR . $class . '.php';
    
    //проверяем наличие класса
    
    if (file_exists($fileName)) {
        
        require $fileName;
    }
});
