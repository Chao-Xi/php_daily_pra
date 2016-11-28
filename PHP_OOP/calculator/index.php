<?php

      // require_once 'classes/Calculator.php';
      // require_once 'classes/OperatorInterface.php';
      // require_once 'classes/Adder.php';
      // require_once 'classes/Subtractor.php';
      // require_once 'classes/Multiplier.php';
      // require_once 'classes/Divider.php';
     
     require_once 'init.php';

      $c=new Calculator;
      $c->setOperation(new Adder);
      $c->calculate(10, 50);
      //60
      
      $c->setOperation(new Subtractor);
      $c->calculate(30);
      //30


      $c->setOperation(new Multiplier);
      $c->calculate(5);
      //150

      $c->setOperation(new Divider);
      $c->calculate(3);
      //150
      echo $c->getResult();
