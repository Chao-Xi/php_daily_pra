<?php
   session_start();
   $_SESSION['user_id']=1;

   $db=new PDO('mysql:dbname=test;host=localhost','root','901014');

   if(!isset($_SESSION['user_id']))
   {
    die('You are not signed in');
   }	
