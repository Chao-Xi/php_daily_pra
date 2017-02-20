<?php
   
   include '1.User.php'; 
   
   $rp=new ReflectionProperty('Acme\User','data');

   echo "<pre>".print_r(get_class_methods($rp),true)."</pre>";

   echo $rp->getName()."<br/>";

   if($rp->isProtected())
   {
   	 echo "This function is protected function"."<br/>";
   }

   //getValue()
   $user=new Acme\User;
   $rp->setAccessible(true);
   echo "<pre>".print_r($rp->getValue($user),true)."</pre>";
 




  
     