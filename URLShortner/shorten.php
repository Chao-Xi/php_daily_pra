<?php
    session_start();

    require_once 'classes/Shortener.php';

    $s=new Shortener;

    if(isset($_POST['url']))
    {   
    	$url=$_POST['url'];
    	if($code=$s->makeCode($url))
    	{ 
    	   //echo "{$code}"; 
    	 $_SESSION['feedback']="Generated! Your short URL is: <a href=\"http://localhost/practice/URLShortner/{$code}\">http://localhost/practice/URLShortner/{$code}</a>";	
    	}else{
    		//There was a problem
    		$_SESSION['feedback']="There was a problem, Invalid URL";
    	}	
    }

    header('Location: index.php');	