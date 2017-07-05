<?php

class Index {

      protected $name;

      protected $surname;

      public function __construct()
      {
	$this->name = "";
	$this->surname = "";
      }

      public function setName(string $name)
      {
	$this->name = $name;
      }

      public function getName()
      {
	return $this->name;
      }
      

}
