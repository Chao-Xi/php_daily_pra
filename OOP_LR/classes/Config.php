<?php
   class Config
   {
   	public static function get($path=null)
   	{
   	   if($path)
   	   {
   	   	  $config=$GLOBALS['config'];
   	   	  $path=explode('/',$path);

   	   	  foreach($path as $bit)    //mysql  host
              {
                 if(isset($config[$bit]))
                 {
                  $config=$config[$bit];    
                 }
                 // $config[$bit]=>mysql=>$config
                 // $config[$bit]=>host=>$config[127.0.0.1]  
              }
             return $config;   
   	    }	
             return false;  
   	}   
   }