<?php
    class Person{

      public $name;
      public $country;

      public function sentense()
      {
      	return $this->name." loves ".$this->country; 
      }

    }