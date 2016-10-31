<?php
   require 'bootstrap.php';
   if($_SERVER['REQUEST_METHOD']!=='POST')
   {
   	die();
   }	
   $delete=$db->prepare('UPDATE user set active=0 where id=:user_id');
   $delete->execute(['user_id'=>$_SESSION['user_id'],]);