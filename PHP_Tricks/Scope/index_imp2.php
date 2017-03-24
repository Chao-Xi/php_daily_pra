<?php 

   $config=[
       'seperator'=>'_',
     ];


   $fullName=function ($firstname, $secondname) use ($config)
   {
      return "{$firstname}{$config['seperator']}{$secondname}";
   }; 
   
   echo $fullName('karlie', 'Kloss');
 ?>