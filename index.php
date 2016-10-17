<?php

use PharmacyLocator\Bootstrapper\Bootstrapper;

ob_start();
const ROOT = __DIR__;

require ROOT . 'vendor/autoload.php';

spl_autoload_register(function($className){
    /*Removes any '\' from left side of URL string*/
    $className = ltrim($className, '\\');
    /*Finds the position of the last occurance of '\' in the string*/
    $lastNsPos = strripos($className, '\\');
    /*Returns only the first part of the full class name.*/
    $namespace = substr($className, 0,$lastNsPos);
    /*Returns only the last part of the URL.*/
    $className = substr($className, $lastNsPos + 1);
    $fileName = implode('/', [ROOT, str_replace('\\', DS, $namespace), $className, '.php']);
    if(file_exists($fileName)){
        require $fileName;
    }else{
        return false;
    }
},true,true);

Bootstrapper::boot();

ob_end_flush();