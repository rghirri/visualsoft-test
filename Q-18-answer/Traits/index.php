<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

/**
 * WHAT ARE TRAITS?
 * Traits solve code duplication and single inheritance problem.
*  If you can copy and paste the code from one class to another 
* (and we’ve all done this, even though we try not to because its 
*  code duplication), then you have a candidate for a  trait.

* Traits are not interfaces at all. Traits can define both static members 
*  and static methods. It helps developers to reuse methods freely in several 
*  independent classes in different class hierarchies. Traits reduces the complexity, 
*  and avoids problems associated with multiple inheritance and Mixins. Note that PHP 
*  does not allow multiple inheritance. 
*  So Traits is used to fulfill this gap by allowing 
*  us to reuse same functionality in multiple classes.
*
*  Write the same code again, to avoid this use the traits. 
*  The traits are used when multiple classes share the same functionality.
*
*  Traits reduce code duplication

 */
/**
 * Please see example below
 */

// Trait Declaration 

trait FlyTrait
{
   public function fly()
   {
      echo "I am flying";
   }
}

trait EngineTrait
{
   public function engine()
   {
      echo "I have an engine";
   }
}

// Class Declaration 

class Plane
{
   use FlyTrait, EngineTrait;
}

class Helicopter
{
   use FlyTrait, EngineTrait;
}

class Car
{
   use EngineTrait;
}

// Create Instance of classes

$plane = new Plane();
echo $plane->fly() . $plane->engine(). "</br>";
/*************************************** */
$helicopter = new Helicopter();
echo $helicopter->fly() . $helicopter->engine() . "</br>";
/*************************************** */
$car = new Car();
echo $car->engine() . "</br>";
/*************************************** */