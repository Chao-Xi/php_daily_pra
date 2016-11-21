<?php
   require_once 'app/init.php';

   $auth=new TwitterAuth($db, $client);

   $auth->signOut();

   header('Location: index.php');