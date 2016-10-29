 <?php
   function getUser()
   {
      return [
               'Alex',
               'Alex@gmail.com', 
                new DateTime
             ];
       
   }
   list($username,$email,$dob)=getUser();
   //list as a container to keep the elements inside the array
   echo $email."</br>";
   echo $dob->format("dS M Y")."</br>";
   echo $dob->format("H:i:s");