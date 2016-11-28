<?php

   class User{

     // protected $db;

      // public function __construct(Database $db)
      // //Dependency Injection
      // {
      // 	$this->db=$db;
      // }


      
      public function create(array $data)
      {   
            $db=Database::getInstance();
            $db->query("INSERT INTO 'user'...");

      	//$this->db->query("INSERT INTO 'user'...");
      } 
   }