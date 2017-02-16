<?php
   function getPrintStrFunc()
   {
   	  $func=function($str)
   	  {
   	  	echo $str;
   	  };
      return $func;
   }

   $printStrFunc=getPrintStrFunc();
   $printStrFunc("I'll get the JOB!");

   echo "<br/>";

   
    