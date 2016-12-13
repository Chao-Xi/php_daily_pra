<?php
   require_once 'vendor/autoload.php';

   $faker=Faker\Factory::create();
  
   $db=new PDO('mysql:host=localhost;dbname=test','root','901014');
   
   $db->query("delete from article");

   foreach(range(1, 100) as $x)
   {
   	  // echo $faker->word,"<br/>";
      //$body=$faker->paragraphs(20);
      
      $body='<p>'.implode('</p><p>', $faker->paragraphs(20)).'</p>';
      //print_r($body);
      
      if(!empty($db))
      {
      	 $db->query("insert into article (title, body, created) values ('{$faker->sentence(20)}', '{$body}', now()) ");
      	//$db->query("insert into article (title, body, created) values ('{$faker->sentence(20)}', '{$body}', '{$faker->iso8601}') ");
      	 // $db->query("insert into article (title, body, created) values ('1', '1', now()) ");
      	echo " insert successfully ";
      }	
      else
      {
      	echo $body;
      }	
     
   }