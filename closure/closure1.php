<?php
  //anonymous function
  //pss a function to a variable
  $func=function($param)
  {
  	echo $param;
  }; //Here is semi-colon

  $func("Hello World");
  //output something
  echo "<br/>";
  
  function printStr()
  {
  	$func=function($str)
  	{
  	  echo $str;	
  	};
  	$func("Welcome to NewYorkCity!");
  }
  printStr();
