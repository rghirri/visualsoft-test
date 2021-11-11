<?php

class Lock
{
  protected $isLocked;

  public function locked()
  {
    $this->isLocked = true;
  }

  public function unlock()
  {
     $this->isLocked = false;
  }

  public function isLocked()
  {
     return $this->isLocked;
  }


}