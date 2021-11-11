<?php

class Car {
  public $name;
  public $color;
  public $fuel;

  function set_name($n) {  // a public function (default)
    $this->name = $n;
  }
  protected function set_color($n) { // a protected function
    $this->color = $n;
  }
  private function set_fuel($n) { // a private function
    $this->fuel = $n;
  }
}