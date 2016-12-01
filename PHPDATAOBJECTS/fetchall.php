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
   
     $sql="select * from page";
     $pageQuery=$handler->query($sql);

    $res=$pageQuery->fetchAll(PDO::FETCH_ASSOC);	
    echo '<pre>'.print_r($res,true).'</pre>';