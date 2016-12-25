<?php
     require_once 'app/init.php';
     //error_reporting(E_ERROR);

    if(isset($_GET['article'], $_GET['rating']))
    {
      $article=(int)$_GET['article'];
      $rating=(int)$_GET['rating'];

      if(in_array($rating, range(1,5)))
      {
      	$exists=$db->query("select * from article where id={$article}")->num_rows? true : false ;

      	if($exists)
      	{
      	$db->query("insert into articles_ratings (article, rating) values ({$article}, {$rating}) ");	
      	}
      }	
      header('Location: article.php?id='.$article);
    } 
?>    	