<?php

/**
 * There are three access modifiers:
 *  public - the property or method can be accessed from everywhere. This is default
 *  protected - the property or method can be accessed within the class and by classes derived from that class (sub or child classes)
 *  private - the property or method can ONLY be accessed within the class
 */

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

spl_autoload_register(function ($class){
  require "classes/$class.php";
});

/** 
 * First example
 */
$apple = new Fruit();
$apple->name = 'Apple';   // OK
$apple->color = 'Green'; // ERROR Property is protected
$apple->weight = '300'; //  ERROR Property is private

/**
 * Second example
 */

$Audi = new Car();
$Audi->set_name('Audi');    // OK
$Audi->set_color('White'); // ERROR Method is protected
$Audi->set_fuel('Petrol'); // ERROR Method is private