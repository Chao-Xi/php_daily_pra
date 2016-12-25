<?php
    
    require_once 'app/init.php';

    $articleQuery=$db->query("
       select article.id, article.title, count(articles_likes.id) as likes,
       group_concat(users.username separator '|') as liked_by 
       from article
       left join articles_likes on article.id=articles_likes.article
       left join users on users.id=articles_likes.user
       group by article.id
       ");
    
    //$articles=[];
    while($row=$articleQuery->fetch_object())
    {   
    	$row->liked_by=$row->liked_by ? explode ('|', $row->liked_by) : [];
    	$articles[]=$row;
    }

   // echo '<pre>',print_r($articles, true),'<pre>'; 	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Articles</title>
</head>
<body>
   <?php foreach($articles as $article): ?>
      <div class="article">
       <h3><?php echo $article->title; ?></h3>
       <a href="like.php?type=article&id=<?php echo $article->id; ?>">Like</a>
       
        <p><?php echo $article->likes; ?> people like this.</p>
        <?php if(!empty($article->liked_by)): ?>
        <ul>
        	<?php foreach($article->liked_by as $user): ?>
             <li><?php echo $user; ?></li>
            <?php endforeach; ?>		
        </ul>
       <?php endif; ?>
      </div>
   <?php endforeach;?> 
</body>
</html>