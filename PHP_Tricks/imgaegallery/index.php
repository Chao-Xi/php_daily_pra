<?php
   
   require 'directoryreader.php';

   $images=directoryReader('images');

   if(!$images)
   {
   	die('could not load files.');
   }	

?>

<!DOCTYPE html>
<html>
<head>
	<title>Gallery</title>
</head>
<body>
     <?php foreach($images as $image): ?>
     <img src="<?php echo $image; ?>">
     <?php endforeach; ?>
</body>
</html>