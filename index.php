<?php

use PharmacyLocator\Bootstrapper\Bootstrapper;

ob_start();
const ROOT = __DIR__;
const DS = DIRECTORY_SEPARATOR;
require implode(DS, ['vendor', 'autoload.php']);

spl_autoload_register(function($className){
    /*Removes any '\' from left side of URL string*/
    $className = ltrim($className, '\\');
    /*Finds the position of the last occurance of '\' in the string*/
    $lastNsPos = strripos($className, '\\');
    /*Returns only the first part of the full class name.*/
    $namespace = substr($className, 0,$lastNsPos);
    /*Returns only the last part of the URL.*/
    $className = substr($className, $lastNsPos + 1);
    $fileName = implode(DS, [str_replace('\\', '/', ROOT), str_replace('\\', '/', $namespace), $className . '.php']);
    if(file_exists($fileName)){
        require $fileName;
    }else{
        return false;
    }
},true,true);

Bootstrapper::boot();

ob_end_flush();
