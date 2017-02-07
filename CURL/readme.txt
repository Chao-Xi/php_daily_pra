1.curl intro
  $ch=curl_init();
  curl_setopt($ch, CURLOPT_URL, $url)
  curl_exec($ch);
  curl_close($ch);

2.Curl download file
  class Download
  functions: cleanurl() isUrl() returnExtension() returnFilename() downloadFile()
  1)const URL_MAX_LENGTH=2050;
  //no dollar sign before 

  2)strlen($url)<self::URL_MAX_LENGTH
   //const variable can called by the self. like: self::const_variable;

  3)if(filter_var($url, FILTER_VALIDATE_URL, FILTER_FLAG_PATH_REQUIRED))
// FILTER_FLAG_SCHEME_REQUIRED Require the scheme (eg, http://, ftp:// etc) within the URL.
// FILTER_FLAG_HOST_REQUIRED Require host of the URL (eg, www.google.com)
// FILTER_FLAG_PATH_REQUIRED Require a path after the host of the URL.
// FILTER_FLAG_QUERY_REQUIRED Require a query at the end of the URL (eg, ?key=value) 
  
  4)end((preg_split("/[.]+/", $url)));
    //end()  return end array
    //end() Only variables should be passed by reference=>WARNING
    //add another parenthensis  or  error_report(E_error)
    //preg_split() Split string by a regular expression

   5)curl_setopt($ch, CURLOPT_RETURNTRANSFER, true); 
     //set false return dummy data
   
   6) $destination="downloads/$filename.$extension";//contains the file name and extension
      $file=fopen($destination, "w+");
      fputs($file, $return);
      fclose()

3.Curl post data to server
  (which means you can receive the data like this $_POST['']);
  
  1)http_build_query()
  $data=array("name"=>"john", "age"=>31);
  $string=http_build_query($data);
  //1.http_build_query — Generate URL-encoded query string
  //2.name=john&age=31

  3)$ch=curl_init("url U wanna pass data to");
   curl_setopt($ch, CURLOPT_POST, true);
   curl_setopt($ch, CURLOPT_POSTFIELDS, $string);
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
   curl_exec($ch);
   curl_close($ch);

  4)Mysqli::real_escape_string()
  //$db->real_escape_string()
  // Escapes special characters in a string for use in an SQL statement, taking into account the current charset of the connection

4.CURL POST file to Server
  
  1)
  $cfile=new CURLFile($_FILES['image']['tmp_name'], $_FILES['image']['type'], $_FILES['image']['name'] );
  $data=array("myimage"=>$cfile);
  curl_setopt($ch, CURLOPT_URL, "movefile.php");
  curl_setopt($ch, CURLOPT_POST, true);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
  curl_error($ch)

  2)
  move_uploaded_file($_FILES['myimage']['tmp_name'], $path);