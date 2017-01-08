<?php   
     
     spl_autoload_register(function($class))
     {
     	require_once 'classes/'.$class.'.php';
     });


     //sanitize
     function escape($string)
     {
     	return htmlentities($string,ENT_QUOTES,'UTF-8');
     }

     

      