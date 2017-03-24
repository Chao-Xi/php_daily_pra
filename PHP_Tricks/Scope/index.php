<?php 

   $config=[
       'seperator'=>'_',
     ];


   function fullName($firstname, $secondname)
   {
      global $config;
      return $firstname.$config['seperator'].$secondname;
   }  
   
   echo fullName('karlie', 'Kloss');
 ?>