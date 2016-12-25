<?php
   require_once 'app/init.php';

   //All articles
   $query=$db->query("select article.id, article.title, avg(articles_ratings.rating) as rating
   	                  from article left join articles_ratings on article.id=articles_ratings.article group by article.id ");
   $articles=[] ;

   while($row=$query->fetch_object())
   {
   	 $articles[]=$row;
   }
?>
<!DOCTYPE html>
<html>
<head>
	<title>Article</title>
</head>
<body>
  <?php foreach($articles as $article): ?>
  <div class="article">
   <h3><a href="article.php?id=<?php echo $article->id; ?>"><?php echo $article->title; ?></a></h3>
   <div class="article-rating">Rating: <?php echo round($article->rating)?>/5</div>
  </div>
 <?php endforeach; ?>	
</body>
</html>