<?php

session_start();

spl_autoload_register('autoload');
function autoload($class_name){
    $path_array = array(
        'database/',
        'controllers/',
        'models/',
        'app/classes/'
    );

    $path = explode('\\', $class_name);
    $name = array_pop($path);

    foreach($path_array as $item){
        $file = sprintf($item.'%s.php',$name);

        if(is_file($file)){
            include $file;
        }
    }
}