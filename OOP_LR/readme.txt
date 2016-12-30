1.$GLOBALS — References all variables available in global scope
  An associative array containing references to all variables which are currently defined in the global scope of the script. The variable names are the keys of the array.
  
  core/init.php

2.function/sanitize.php htmlentitles($str, ENT_QUOTES, 'UTF-8')
3.database
  //Just connect the database once, dont have to connect multiple times
    public static function getInstance()
    {
       if(!isset(self::$_instance))
       {
       	 self::$_instance=new DB();
       }
       return self::$_instance;  	
    } 
 4.db.php   
