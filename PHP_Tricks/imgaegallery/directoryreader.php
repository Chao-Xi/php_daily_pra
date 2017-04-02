<?php
   
   function directoryReader($directory, array $excludeFiles = ['.', '..'])
   {
   	   $files=[];

   	   if(!is_dir($directory))
   	   {
   	   	 return null;
   	   }

   	   if(!($fileDirectory = opendir($directory)))
   	   {
   	   	return null;
   	   }

   	   while(($file = readdir($fileDirectory)) !==false)
   	   {
   	   	 if(in_array($file, $excludeFiles))
   	   	 {
   	   	 	continue;
   	   	 }

   	   	 $files[] = $directory.'/'.$file;
   	   }

   	   closedir($fileDirectory);

   	   return $files;	
   }

   // is_dir(images)  contains images/.. images/
   //opendir()
   //in_array()
   //closedir()
