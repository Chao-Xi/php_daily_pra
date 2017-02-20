<?php
   
   include '1.User.php'; 
   
   $rm=new ReflectionMethod('Acme\User','getData');

   echo "<pre>".print_r(get_class_methods($rm),true)."</pre>";

    if($rm->isPublic())
    {
      echo "It's a public function";
    }  
