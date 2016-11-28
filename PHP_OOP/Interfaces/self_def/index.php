<?php

   require_once 'TalkInterface.php';
   require 'Dog.php';
   require 'Cat.php';

   $dog=new Dog();
   $cat=new Cat();

   echo $dog->talk(). '<br/>'. $cat->talk();