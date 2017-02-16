<?php
   //pass the anonymous function as argument
   function callFunc($func)
   {
   	$func('I love NewYorkCity');
   }
   
   //closure function=>is just a function carry with data
   $printStrFunc=function($str)
   {
   	echo $str;
   };

   callFunc($printStrFunc);

   
   echo "<br/>";

   callFunc(function($str){
   	echo $str;
   });


