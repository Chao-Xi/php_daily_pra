<?php
     //1. In data model .php is safer than .inc
     //2. XSS Cross-site Scripting
   require 'function.php';
   $date=new DateTime('+1 week');
   setcookie('cookie1','abc',$date->getTimeStamp());
   $db=new PDO("mysql:host=127.0.0.1;dbname=test",'root','901014');
  
   if(!isset($_GET['username']))
   {
   	die();
   }
   $user=$db->prepare("select * from users where username=:username");
   $user->execute(['username'=>$_GET['username']]);
   $user=$user->fetchObject();
 
   ?>
   <!DOCTYPE html>
   <html>
   <head>
   	<title></title>
   </head>
   <body>
    <?php echo e($user->username); ?>
    <?php echo e($user->email); ?>
    <?php echo e($user->bio); ?>
   </body>
   </html>