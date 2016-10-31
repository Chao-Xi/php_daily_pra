 <?php
    // http://www.openwall.com/phpass/
   include 'PasswordHash.php';
   $hash=new PasswordHash(8,false);
   //function PasswordHash($iteration_count_log2, $portable_hashes)

   $unhashed='secret';

   $hashed=$hash->HashPassword($unhashed);

   echo $hashed,'<br/>';

   if($hash->checkPassword($unhashed,$hashed))
   {
   	echo 'Match';
   }else{
   	echo "Unmatch";
   }

   echo "<br/>";

   //php5.5+ inside function
   $hashed1=password_hash($unhashed,PASSWORD_DEFAULT);
   
   echo $hashed1,'<br/>';

   if(password_verify($unhashed,$hashed1))
   {
     echo "Match";
   }	