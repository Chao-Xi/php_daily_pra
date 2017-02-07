<?php
  class Download{
  	const URL_MAX_LENGTH=2050;
  	//no dollar sign before

  	//clean url
  	protected function cleanUrl($url)
  	{
  		if(isset($url))
  	    {
  	      if(!empty($url))
  	      {
           if(strlen($url)<self::URL_MAX_LENGTH)
           {
             return strip_tags($url); 
           }
  	      }  	
  	    }		
  	}
    //const variable can called by the self
    //like: self::const_variable;
   
   //check (is url)
  	protected function isUrl($url)
  	{
      $url=$this->cleanUrl($url);
      if(isset($url))
      {
         if(filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_PATH_REQUIRED))
//filter_var();          
// FILTER_FLAG_SCHEME_REQUIRED Require the scheme (eg, http://, ftp:// etc) within the URL.
// FILTER_FLAG_HOST_REQUIRED Require host of the URL (eg, www.google.com)
// FILTER_FLAG_PATH_REQUIRED Require a path after the host of the URL.
// FILTER_FLAG_QUERY_REQUIRED Require a query at the end of the URL (eg, ?key=value)
         {
           return $url;	
         }
      }	
  	}
    
    //return extension
    protected function returnExtension($url)
    {
      if($this->isUrl($url))
      {
      	$end=end((preg_split("/[.]+/", $url)));
      	//end()  return end array
      	//end() Only variables should be passed by reference=>WARNING
      	//add another parenthensis  or  error_report(E_error)
      	//preg_split() Split string by a regular expression
      	if(isset($end))
      	{
      	  return $end;
      	}	
      }	
    }
    
     protected function returnfilename($url)
    {
      if($this->isUrl($url))
      {
      	$urlandfilename=(preg_split("/[.]+/", $url));
      	if(isset($urlandfilename))
      	{
      	   if(is_array($urlandfilename))
      	   {
      	   	 $rawfilename=$urlandfilename[count($urlandfilename)-2];
      	   	 $filename=count(explode('/',$rawfilename))>0 ? end((explode('/',$rawfilename))) : 'untitled';
      	   	 return $filename;
      	   }	
      	}
      
      }	
    }
    //download file
    public function downloadFile($url)
    { 
       // var_dump($this->returnfilename($url)); 	
      if($this->isUrl($url))
      {
      	$extension=$this->returnExtension($url);
      	$filename=$this->returnfilename($url);
      	if($extension)
      	{
      	    $ch=curl_init();
      	    curl_setopt($ch, CURLOPT_URL, $url);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
            //set false return dummy data
            $return=curl_exec($ch);
            curl_close($ch);

            $destination="downloads/$filename.$extension";
            // echo $destination;
            $file=fopen($destination, "w+");
            fputs($file, $return);//save into this file
            if(fclose($file))
            {
              echo "File download";	
            }	
      	}	
      }	
    } 

  }

  $obj=new Download();
  if(isset($_POST['url']))
  {
  	$url=$_POST['url'];
  }	
?>
<!DOCTYPE html>
<html>
<head>
	<title>curl download file</title>
</head>
<body>
   <form action="index.php" method="POST">
   <input type="url" name="url" maxlength="2000">
   <input type="submit" name="download" value="download">
   </form>
</body>
</html>
<?php
    if(isset($url))
    {
      $obj->downloadFile($url);
    }
?>    
