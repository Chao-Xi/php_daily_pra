<?php
  $response=['alex', '27', 'blue'];

  list($name, $age, $color)=$response;

  echo $name;

  [$name, $age, $color]=$response;  //php 7.0

  echo $age;

  $response1=['name'=>'alex', 'age'=>'27', 'color'=>'blue'];
  ['name'=>$name, 'age'=>$age, 'color'=>$color]=$response;  //php 7.0
  echo $name;