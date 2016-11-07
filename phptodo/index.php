<?php
   require_once 'app/init.php';

   $itemQuery=$db->prepare("select id, name, done from items where user=:user");

   $itemQuery->execute(['user'=>$_SESSION['user_id']]);

   $items=$itemQuery->rowCount()? $itemQuery:[];

   // foreach ($items as $item) {
   //   print_r($item);
   // }
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
	<title>To do</title>
	<link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Shadows+Into+Light+Two" rel="stylesheet">
	<link href="css/main.css" rel="stylesheet">
	<meta name="viewport" content="width=device-width, inital-scale=1.0">
</head>
<body>
   <div class="list">
       <h1 class="header">To do.</h1>
       
       <?php if(!empty($items)):?>
       <ul class="items">
       <?php foreach($items as $item): ?>
       	<li><span class="item<?php echo $item['done']? ' done':'';?>"><?php echo $item['name'];?></span>
       	<?php if(!$item['done']):?>
       	<a href="mark.php?as=done&item=<?php echo $item['id'];?>" class="done-button">Mark as done</a>
        <?php endif;?>
       	</li>
       <?php endforeach; ?>
       </ul>
       <?php else: ?>
       	<p>You haven't add any items yet</p>
       <?php endif;?> 

      <form class="item-add" action="add.php" method="post">
       <input class="input" type="text" name="name" placeholder="Type a new item here" autocomplete="off" required>
       <input type="submit" value="Add" class="submit">
      </form>
   </div>

</body>
</html>