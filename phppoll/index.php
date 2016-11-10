<?php
    require_once 'app/init.php';
     $pollQuery=$db->query("select id, questions from polls where DATE(NOW()) between starts and ends");
     while($row=$pollQuery->fetchObject())
     {
     $polls[]=$row;	
     }	
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>Poll</title>
	<link rel="stylesheet" href="css/main.css"/>
</head>
<body>
     <ul>
     	 <?php if(!empty($polls)):?>
           <?php foreach($polls as $poll):?>
              <li><a href="poll.php?poll=<?php echo $poll->id; ?>"><?php echo $poll->questions; ?></a></li> 
           <?php endforeach;?> 
     	  <?php else: ?>
     	  There is no polls at this moment
     	  <?php endif;?> 	
     </ul>
</body>
</html>