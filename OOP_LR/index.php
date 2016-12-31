<?php
   require_once 'core/init.php';
   //require_once '/functions/sanitize.php'; Put this code in init.php, it is error, while in index.php it's absoultely correct

   // $GLOBALS['config']['mysql']['host'];

   //static function Classname::functionname(parameter)
   //$user=DB::getInstance()->get('users',array('username','=','kristen'));
   //$user=DB::getInstance()->query("select * from users");
  $userUpdate=DB::getInstance()->update('users','3',['name'=>'Keria Knightly']);
