<?php
   
   include '1.User.php'; 
   
   $rc=new ReflectionClass('Acme\User');
   echo '<pre>'.print_r(get_class_methods($rc), true).'</pre>';
   
   if($rc->hasMethod('isLoggedIn'))
   {
   	  echo 'This function exists inside the class';
   }else
   {
   	 echo 'This function doesnt exists inside the class';
   }	

   echo $rc->getName()."</br>";
   echo $rc->getShortName()."</br>";


