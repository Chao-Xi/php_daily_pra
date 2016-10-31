<?php
   $db=new PDO('mysql:host=127.0.0.1;dbname=test','root','901014');
   if(isset($_POST['email']))
   {
      $email=$_POST['email'];
      //$user=$db->query("select * from user where email='{$email}' ");
     //Sql injection
      //';DROP TABLE forum_topics;--

      $user=$db->prepare("select * from user where email=:email");
      $user->execute(['email'=>$email,]);
      if($user->rowCount())
      {
      	die('Send email');
      }	
   }
 ?>
 <!DOCTYPE html>
 <html>
 <head>
    <meta charset="utf-8"> 
 	<title>Reset Password</title>
 </head>
 <body>
 <form action="sqlinjection.php" method="post" autocomplete="off">
 	 <label for="email">
     Email Address:
     <input type="text" name="email" id='email'/>
     <!--<input type="email" name="email" id='email'/>-->
     <input type="submit" value="recover">
     </label>
 </form>
 </body>
 </html>  