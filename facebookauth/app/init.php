<?php
session_start();
require_once 'vendor/autoload.php';
Facebook\FacebookSession::setDefaultApplication('133400860475709','053a50cabef0866e4d4c908d61deadf2');
$facebook=new Facebook\FacebookRedirectLoginHelper('http://localhost/practice/facebookauth/index.php');

try{
	if($session=$facebook->getSessionFromRedirect())
	{
		$_SESSION['facebook']=$session->getToken();
		header('Location: index.php');
    }

   if(isset($_SESSION['facebook']))
   {
	 $session=new Facebook\FacebookSession($_SESSION['facebook']);
     $request=new Facebook\FacebookRequest($session, 'GET', '/me');
     $request=$request->execute();

     $user=$request->getGraphObject()->asArray();
          
     //print_r($user); 
  }
	

   }catch(Facebook\FacebookRequestException $e)
   {
   	//when facebook return error
   }catch(\Exception $e)
   {
   	//A local issue
   }

?>