<?php
   
   include '1.User.php'; 
   
   $user=new Acme\User;

   $rp=new ReflectionParameter(['Acme\User','setData'], 0);

   echo "<pre>".print_r(get_class_methods($rp),true)."</pre>";

   echo $rp->isArray();

   
 




  
     