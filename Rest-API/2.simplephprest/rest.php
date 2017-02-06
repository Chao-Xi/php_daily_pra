<?php 
   
   $verb=$_SERVER['REQUEST_METHOD'];

   if($verb=='GET')
   {
   	 if(isset($_GET['filename']))
   	 {
   	 	$file_content=file_get_contents($_GET['filename']);
   	 	echo $file_content;
         //http://localhost/practice/Rest-API/2.simplephprest/rest.php?filename=test.txt
   	 }else
   	 {
   	 	die("Error:REQUIRED PARAMETERS NOT GIVEN");
   	 }	
   }elseif($verb=='POST')
   {
   	if(isset($_POST['filename']) && isset($_POST['content']))
      {  
         file_put_contents($_POST['filename'], $_POST['content']);
      }else
      {
         die("Error: REQUIRED PARAMETERS NOT GIVEN");
      }

   }elseif ($verb=='DELETE') {
   	 //DELETE SOME STUFF
      parse_str(file_get_contents('php://input'), $_DELETE);

      if(isset($_DELETE['file']))
       {
         unlink($_DELETE['file']);
       } else
       {
         die('ERROR: REQUIRED PARAMETERS NOT GIVEN');
       } 
   }	
   
 ?>

 //Advanced Rest client: POST and Delete
 //DATA-form add variables
 //post filename content
 //delete file