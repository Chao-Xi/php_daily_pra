<?php
   try{
       $handler=new PDO('mysql:host=127.0.0.1;dbname=test','root','901014');
       $handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      }
    catch(PDOException $e)
    {
      echo $e->getMessage();
      die();
    }     
    
    $email="xichao@gmail.com";
    $password="12345";
    $username="haha";
    $active="0"; 

    $sql="insert into user (email, password ,username, active) values (?, ?, ?, ?)";

    $query=$handler->prepare($sql);

    $query->execute(array($email, $password, $username, $active));

    echo $handler->lastInsertId();

