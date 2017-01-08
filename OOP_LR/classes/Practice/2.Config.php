<?php
    $GLOBALS['config']=array(

      'mysql'=>array(
            'host'=>'127.0.0.1',
            'username'=>'root',
            'password'=>'901014',
            'db'=>'lr'         
      	            ),
      	           );

  //1)Method one(not good)
   $GLOBALS['config']['mysql']['host'];
  
  //2)Method two(good) 
   class Config
   {
   	public static function get($path=null)
   	{
   	   if($path)
   	   {
   	   	  $config=$GLOBALS['config'];
   	   	  $path=explode('/',$path);
          foreach($path as $bit)
         {
           if(isset($config[$bit]))
          {
             $config=$config[$bit];    
          }
         }
          return $config;   
   	    }	
        return false;  
   	}   
   }

 var_dump(Config::get('mysql/host'));  