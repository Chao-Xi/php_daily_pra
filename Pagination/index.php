<?php
   
    $db=new PDO('mysql:host=localhost;dbname=test','root','901014');

    //User input
    $page=isset($_GET['page'])?(int)$_GET['page']:1;
    $perPage=isset($_GET['per-page']) && $_GET['per-page']<=50 ? (int)$_GET['per-page']:10;

    //Positioning
    $start=($page>1) ? ($page * $perPage)-$perPage:0;

    //Query

    $sentences=$db->prepare("select SQL_CALC_FOUND_ROWS id, title from sentence limit {$start}, {$perPage} ");

    $sentences->execute();

    $sentences=$sentences->fetchAll(PDO::FETCH_ASSOC);

    //var_dump($sentences); 

    //Pages
    $total=$db->query("select FOUND_ROWS() as total")->fetch()['total'];
    //echo $total; 
    $pages=ceil($total/$perPage); 
?>

<!DOCTYPE html>
<html>
<head>
	<title>Pagination</title>
	<link rel="stylesheet" href="app.css"/>
</head>
<body>
    <?php foreach ($sentences as $sentence): ?>
     <div class="sentences">
     <p><?php echo $sentence['id']; ?>: <?php echo $sentence['title']; ?></p> 
     </div>
     <?php endforeach; ?> 

     <div class="pagination">
     <?php for($x=1; $x<=$pages; $x++): ?>
     <a href="?page=<?php echo $x;?>&per-page=<?php echo $perPage; ?>"<?php if($page===$x){ echo 'class="selected" '; }?>><?php echo $x;?></a>
     <?php endfor;?>	
     </div>
    	  
</body>
</html>