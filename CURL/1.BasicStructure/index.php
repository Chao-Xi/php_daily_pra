 <?php 
   //initialize session set a handler
   $ch=curl_init();

   //curl_setopt(ch, option, value)
   curl_setopt($ch, CURLOPT_URL, "http://api.fixer.io/latest?base=USD&symbols=CNY");

   curl_exec($ch);
   
   curl_close($ch);
 ?>