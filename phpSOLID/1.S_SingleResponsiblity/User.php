<?php
     
     class User{
       
       protected $logger;

       public function __construct(Logger $logger)
       {
       	  $this->logger=$logger;
       	  //dependency injection
       }
        
       public function create(array $data)
       {
       	  try{
       	  	//..save user to database
       	  }catch(DatabaseException $e)
       	  {
       	  	$this->logger->writeToFile($e->getMessage());
       	  }
       } 
     }
       //one class call another class object(dependency injection) 
 ?>  