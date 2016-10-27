<?php
   //Modify time
   $date=new DateTime;
   //$date->add(new DateInterval('P10DT2H'));
   //DateInterval P:period 10 D:days T:times 2 H:hours 
   $days=10;
   $hours=2;
   $date->add(new DateInterval('P'.$days.'DT'.$hours.'H'));
   //$date->sub(new DateInterval('P10DT2H'));
   //add 10 days after or subtract 10 days 

   var_dump($date);
   echo "<br/>";


   $date1=new DateTime('+10 days 5 hours');
   var_dump($date1);
   echo "<br/>";

   $date2=new DateTime();
   $date2->modify('+2 days');//pass the days by reference
   var_dump($date2);
   echo "<br/>";


   $date3=new DateTime();

   $newDate=clone $date3;//clone a new date3 for the date3, they are totally identical 

   $newDate=$newDate->modify('+2 days');//pass the days by reference
   
   print_r($date3);
   echo "<br/>";
   print_r($newDate);
   echo "<br/>";