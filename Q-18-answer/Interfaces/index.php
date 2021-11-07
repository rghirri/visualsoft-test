<?php

/**
 * An Interface is provided so you can describe a 
 * set of functions and then hide the final 
 * implementation of those functions in an 
 * implementing class. This allows to change 
 * the IMPLEMENTATION of those functions without changing how you use it.
 * 
 * Please see example below
 */

// Interface definition
interface Animal {
  public function makeSound();
}

// Class definitions
class Cat implements Animal {
  public function makeSound() {
    echo " Meow ";
  }
}

class Dog implements Animal {
  public function makeSound() {
    echo " Bark ";
  }
}

class Mouse implements Animal {
  public function makeSound() {
    echo " Squeak ";
  }
}

// Create a list of animals
$cat = new Cat();
$dog = new Dog();
$mouse = new Mouse();
$animals = array($cat, $dog, $mouse);

// Tell the animals to make a sound
foreach($animals as $animal) {
  $animal->makeSound();
}