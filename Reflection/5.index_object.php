<?php
   
   include '1.User.php'; 
   
   $user=new Acme\User;

   $ro=new ReflectionObject($user);

   echo $ro->getName()."<br/>";
   echo $ro->getShortName()."<br/>";

   echo "<pre>".print_r(get_class_methods($ro),true)."</pre>";

   echo $ro->getFileName();


   
 




  
     