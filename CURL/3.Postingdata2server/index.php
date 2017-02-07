<?php
   $data=array("name"=>"john", "age"=>31);
   $string=http_build_query($data);
   //1.http_build_query — Generate URL-encoded query string
   //2.name=john&age=31
   // echo $string;
   $ch=curl_init("http://localhost/practice/CURL/3.Postingdata2server/data.php");
   curl_setopt($ch, CURLOPT_POST, true);
   curl_setopt($ch, CURLOPT_POSTFIELDS, $string);
   curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
   curl_exec($ch);
   curl_close($ch);
  ?> 