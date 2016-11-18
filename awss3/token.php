<?php
   require_once 'app/start.php';
   $object="uploads/uploadme.txt";

   $url=$s3->getObjectUrl($config['s3']['bucket'],$object,"+1 minute");
 ?>
 
 <!DOCTYPE html>
 <html>
 <head>
 <meta charset="utf-8">
 	<title>Token__</title>
 </head>
 <body>
    <a href="<?php  echo $url;?>">Download</a>
 </body>
 </html>  