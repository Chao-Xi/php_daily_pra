<?php
   try{
       $handler=new PDO('mysql:host=127.0.0.1;dbname=cms1','root','901014');
       $handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      }
    catch(PDOException $e)
    {
      echo $e->getMessage();
      die();
    }     
   
     $sql="select * from page limit 0";
     $pageQuery=$handler->query($sql);

     if($pageQuery->rowCount())
     {
      while($res=$pageQuery->fetch(PDO::FETCH_OBJ))
       {
         echo $res->body,"<br>";
       } 
     } else
     {
       echo 'No results';
     }
