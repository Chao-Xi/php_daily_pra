<?php
    
    require_once 'vendor/autoload.php';

    $pages=new \Controllers\Core\Web\Pages();
?>

<!DOCTYPE html>
<html>
<head>
	<title>PHPUnit</title>
</head>
<body>
   
   <h1><?php $pages->render(); ?></h1>
   <pre><?php var_dump($pages->returnArray()); ?></pre>
</body>
</html>
