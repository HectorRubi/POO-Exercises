<?php
class Account {
  $id = integer;
  $name = string;
  $document = string;
  $email = string;
  $password = string;

  function __construct($name, $document) {
    $this->name = $name;
    $this->document = $document;
  }
}
