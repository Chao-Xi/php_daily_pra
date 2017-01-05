<?php
   require_once 'core/init.php';
   //require_once '/functions/sanitize.php'; Put this code in init.php, it is error, while in index.php it's absoultely correct

   // $GLOBALS['config']['mysql']['host'];

   //static function Classname::functionname(parameter)
   //$user=DB::getInstance()->get('users',array('username','=','kristen'));
   //$user=DB::getInstance()->query("select * from users");
   //$userUpdate=DB::getInstance()->update('users','3',['name'=>'Keria Knightly']);
    if(Session::exists('home'))
    {
     echo "<p>".Session::flash('home')."</p>";
    }	

    //echo Session::get(Config::get('session/session_name'));
    $user=new User();
    //echo $user->data()->username;
    
    if($user->isLoggedIn())
    {
 ?>   
     <p>Hello <a href="profile.php?user=<?php echo escape($user->data()->username);?>"><?php echo escape($user->data()->username); ?></a></p>

     <ul>
       <li><a href="logout.php">Log out</li>
       <li><a href="update.php">Update info</li>
       <li><a href="changepassword.php">Change Password</a></li>
     </ul>
 <?php
     if($user->hasPermission('admin'))
     {
      echo "<p>You are an administrator!</p>";
     }
    }else
     {
      echo '<p>You need to <a href="login.php">login</a> or <a href="register.php">register</a></p>';
     }
?>       
