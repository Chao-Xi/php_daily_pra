<?php	
if($validation->passed())
{
//    Session::flash('success',"Your registered successfully");
//    header("Location: ");
// }else
// {
//   foreach($validation->errors() as $error)
//   {
//     echo $error,'<br/>';
//   } 
// }  
  
  // 

  //index.php
  if(Session::exists('home'))
    {
     echo "<p>".Session::flash('home')."</p>";
    } 
 

 //register.php
 Session::flash('home','You have been registered and can now log in');
 
 //Session.php   
class Session{
  public static function flash($name, $string='')
    	{
           if(self::exists($name))
           {
             $session=self::get($name);
             self::delete($name);
             return $session;  
           }else{
           	self::put($name, $string);
           }	

    	}
}

