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
   if(!$this->query($sql, $fields)->error())
    {
     return true;
    }  
   //directly run the code
   
1.Database
2.Directory Structure and files
3.Intialization
4.functions
5.Config Class
6.Connect Database
7.Database Querying
8.Database Results
9.Database Insert/Update
10.Form Validation
11.CSRF protection
12.Flashing
13.Registering User
14.Redirecting
15.log in 
16.Checking Signed In
17.Logging Out
18.Remember me
19.Update Information 
20.Changing Password 
21.Permissions
22.User Profile
