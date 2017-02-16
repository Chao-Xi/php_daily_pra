<?php
  function getMoney()
  {
  	$dollar=1;
    $rmb=3;

  	$func=function() use (&$dollar, $rmb)
  	{
      echo "&dollar is:".$dollar."<br/>";
      echo "rmb is:".$rmb."<br/>";
      $dollar++;
  	};

  	$func();
  	echo "dollar after process: ".$dollar;
  }

  getMoney();