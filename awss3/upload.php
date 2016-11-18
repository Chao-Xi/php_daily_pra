<?php
    use Aws\S3\Exception\S3Exception;
    require_once 'app/start.php';
    if(isset($_FILES['file']))
    {
     $file=$_FILES['file'];//This is relates to the file we're uploading
     
     //File details
     $name=$file['name'];
     $temp_name=$file['tmp_name'];

     $extension=explode('.',$name);//Getting the extensions of the file
     $extension=strtolower(end($extension));

     //TMP details
     $key=md5(uniqid());   //generating the random file name
     $tmp_file_name="{$key}.{$extension}";
     $tmp_file_path="files/{$tmp_file_name}";

     //var_dump($tmp_file_path);
     
     //Move the file
     move_uploaded_file($temp_name, $tmp_file_path);

     try{  

         $s3->putObject([
               'Bucket'=>$config['s3']['bucket'],
               'Key'=>"uploads/{$name}",
               'Body'=>fopen($tmp_file_path, 'rb'), //Resourece, open files- rb is rading
               'ACL'=>'public-read'                 //Access control level, permisson as such
         	]);
         unlink($tmp_file_path);
         //delete the file

     }catch(S3Exception $e){ 
     	die('There was an error uploading that file'); 
     }  
    } 	
 ?>
 
 <!DOCTYPE html>
 <html>
 <head>
    <meta charset="utf-8">
 	<title>Uplaod</title>
 </head>
 <body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
     <input type="file" name="file">
     <input type="submit" value="Upload">
    </form>
 </body>
 </html>   