<?php
   //intval() extract integer from string or num 
   //(int)   change any format of number to integer 
   
   $date=new DateTime('2016-12-25 12:00:00');
   if($date->format('Y')==='2016')
   {
   	echo "yes";
   }
 ?>  
