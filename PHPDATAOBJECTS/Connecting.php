<?php
   //print_r(PDO::getAvailableDrivers());
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

    // while($res=$pageQuery->fetch())
    // {
    // 
    // 	echo $res['body'].'<br/>';
    // }
    


    while($res=$pageQuery->fetch(PDO::FETCH_OBJ))
    {
    	echo $res->slug."<br/>";
    }



   //Output num and assoc both
    $r0=$pageQuery->fetch(PDO::FETCH_BOTH);	
    echo '<pre>'.print_r($r0,true).'</pre>';
//      Array
// (
//     [id] => 1
//     [0] => 1
//     [label] => First-page
//     [1] => First-page
//     [title] => This is my first page
//     [2] => This is my first page
//     [body] => Welcome to my first page
//     [3] => Welcome to my first page
//     [slug] => first-page
//     [4] => first-page
//     [created] => 2016-10-07 10:11:57
//     [5] => 2016-10-07 10:11:57
//     [updated] => 
//     [6] => 
// )
    
    //Just output num array 
    $r1=$pageQuery->fetch(PDO::FETCH_NUM);	
    echo '<pre>'.print_r($r1,true).'</pre>';

//     Array
// (
//     [0] => 1
//     [1] => First-page
//     [2] => This is my first page
//     [3] => Welcome to my first page
//     [4] => first-page
//     [5] => 2016-10-07 10:11:57
//     [6] => 
// )

    //Just output assoc array
    $r2=$pageQuery->fetch(PDO::FETCH_ASSOC);	
    echo '<pre>'.print_r($r2,true).'</pre>';

    //Just output object
    $r3=$pageQuery->fetch(PDO::FETCH_OBJ);	
    echo '<pre>'.print_r($r3,true).'</pre>';

//     stdClass Object
// (
//     [id] => 5
//     [label] => Fifth Page
//     [title] => Fifth Page
//     [body] => This is my fifth page
//     [slug] => Fifth Page
//     [created] => 2016-10-20 20:20:01
//     [updated] => 2016-10-20 20:20:01
// )

