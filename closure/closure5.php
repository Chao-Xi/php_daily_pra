<?php
  function getMoneyFunc()
  {
  	$dollar=1;

  	$func=function() use (&$dollar)  //=>closure function
  	{
      echo $dollar;
      $dollar++;
  	};
    return $func;
  }
  $getMoney=getMoneyFunc();
  $getMoney();
  $getMoney();
  $getMoney();