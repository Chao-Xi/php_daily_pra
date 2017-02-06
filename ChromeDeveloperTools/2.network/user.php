<?php
  
  header('Content-type: application/json');

  $users=[
       ['name'=>'Dale', 'username'=>'dale'],
       ['name'=>'Mohammed', 'username'=>'mohammed'],
       ['name'=>'vihaan', 'username'=>'vihaan'],
  ];

  echo json_encode($users);