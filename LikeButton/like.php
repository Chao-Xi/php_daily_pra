<?php
    require_once 'app/init.php';

    if(isset($_GET['type'], $_GET['id']))
    {
    	$type=$_GET['type'];
    	$id=(int)$_GET['id'];

    	switch($type)
    	{
    		case 'article':
    		$db->query("
                        insert into articles_likes (user, article)
                          select {$_SESSION['user_id']}, {$id}
                        from article
                        where exists(
                         select id
                         from article
                         where id={$id}   
                        ) and not exists(
                         select id
                         from articles_likes
                         where user={$_SESSION['user_id']}
                         and article={$id}
                        )
                        limit 1  
    			      ");
    		break;
    	}
    }

  header('Location: index.php');  