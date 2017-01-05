<?php
   require_once 'core/init.php';

   if(!$username=Input::get('user'))
   {

   	Redirect::to('index.php');
   }else
   {
   	// var_dump($username);
   	// die();
   	$user=new User($username);
   	// var_dump($user);
    // die();

   	if(!$user->exists())
    {
    	Redirect::to(404);
    }else
    {
     $data=$user->data();
    }		
  
 ?>
  <h3><?php echo escape($data->username); ?></h3>
  <p>Fullname: <?php echo escape($data->name); ?></p>  

 <?php
 }
 ?> 	