<?php
    require_once 'app/init.php';
    
    $article=null;

    if(isset($_GET['id']))
    {
     $id=(int)$_GET['id'];
     $article=$db->query("
          select article.id, article.title, avg(articles_ratings.rating) as rating
   	                  from article left join articles_ratings on article.id=articles_ratings.article where article.id={$id} 
     	")->fetch_object();	
    } 	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Article</title>
</head>
<body>
  <?php if($article): ?>
   <div class="artilce">
    This is article "<?php echo $article->title; ?>".
    <div class="article-rating">Rating: <?php echo round($article->rating); ?>/5</div>
    <div class="article-rate">
     Rate this article:
     <?php foreach(range(1,5) as $rating): ?>
     <a href="rate.php?article=<?php echo $article->id;?>&rating=<?php echo $rating;?>"><?php echo $rating;?></a>
     <?php endforeach;?> 	
    </div> 
   </div> 
  <?php endif; ?>
 <a href="index.php">back2top</a>
</body>
</html>