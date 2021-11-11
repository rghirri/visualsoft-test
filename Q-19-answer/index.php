<?php 

/**
 * Namespaces are qualifiers that solve two different problems:
*  1) They allow for better organization by grouping classes that 
*     work together to perform a task
*  2) They allow the same name to be used for more than one class, 
*     this also applies for functions
*  3) It's also used to organise code
 */

// Example of namespace

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

spl_autoload_register(function ($class){
  require "$class.php";
});

use App\Models\Admin\Item as FirstItem;

use App\Utils\Item as SecondItem;



$objFirst = new FirstItem;

echo $objFirst::helloClass().'</br>';

$objSecond = new SecondItem;

echo $objSecond::helloClass().'</br>';