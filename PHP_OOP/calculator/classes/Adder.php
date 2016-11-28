<?php
     class Adder implements OperatorInterface
     {

        public function run($result, $number){
         
         return $result + $number;
        }

     }