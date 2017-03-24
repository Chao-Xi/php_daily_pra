<?php 

   $config=[
       'seperator'=>'_',
     ];


   function fullName($firstname, $secondname, $config)
   {
      return "{$firstname}{$config['seperator']}{$secondname}";
   }  
   
   echo fullName('karlie', 'Kloss', $config);
 ?>