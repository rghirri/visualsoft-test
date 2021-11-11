<?php 

/**
 * What is PHP dependency injection?
 * Dependency injection is a procedure where one object supplies 
 * the dependencies of another object. 
 * Dependency Injection is a software design approach that allows avoiding  
 * hard-coding dependencies and makes it possible to change 
 * the dependencies both at runtime and compile time.
 */

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

spl_autoload_register(function ($class){
  require "classes/$class.php";
});

$chest = new Chest(new Lock);

echo $chest->close().'</br>';

echo $chest->open().'</br>';