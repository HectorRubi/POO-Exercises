<?php
class Car {
  $id = integer;
  $license = string;
  $driver = Account;
  $passenger = integer;

  function __construct($license, $driver) {
    $this->license = $license;
    $this->driver = $driver;
  }
}
