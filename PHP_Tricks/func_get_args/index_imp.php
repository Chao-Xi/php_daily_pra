<?php
   function add()
   {
   	 $total=0;

   	 foreach(func_get_args() as $number)
   	 {  
   	 	if(!is_numeric($number))
   	 	{
   	 		continue;
   	 	}
   	 	 $total += $number;
   	 }	

   	 return $total;
   }

  echo add(5, 10, 20); 