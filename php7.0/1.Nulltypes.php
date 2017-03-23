<?php
   class User
   {
   	 public $name;

   	 public function getName() : ? string
   	 {
   	 	return $this->name;
   	 }
   }

   $user=new User();
   //$user->name='Alex';

   echo $user->getName();