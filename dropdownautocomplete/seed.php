<?php
   require_once 'vendor/autoload.php';

   $faker=Faker\Factory::create();
  
   $db=new PDO('mysql:host=localhost;dbname=website','root','901014');

   foreach (range(1, 10000) as $x) {
    
    $db->query("insert into autocomplete (username) values ('{$faker->userName}')");
   }