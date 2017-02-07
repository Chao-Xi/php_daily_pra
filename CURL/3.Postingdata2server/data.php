<?php
   
   if(isset($_POST['name'], $_POST['age']))
   {
   	$db=new mysqli("localhost", "root", "901014", "website");
   	$name=$db->real_escape_string($_POST['name']);;
   	 // Escapes special characters in a string for use in an SQL statement, taking into account the current charset of the connection
   	$age=(int)$_POST['age'];
   	$query="INSERT INTO data SET mydata='$name, $age'";
   	$db->query($query);
   	// echo mydata;
   }	