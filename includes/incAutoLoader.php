<?php

spl_autoload_register('myAutoLoader');

function myAutoLoader ($class_name) 
{
    $url = $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'];    

    if (strpos($url, 'includes') !== false) 
    {
        $path = '../classes/';
    } 
    else 
    {
        $path = 'classes/';
    }
    
    $ext = '.php';
    require_once $path . $class_name . $ext;
}