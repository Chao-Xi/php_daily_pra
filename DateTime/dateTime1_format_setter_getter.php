<?php 
    
     $date=new DateTime;
     var_dump($date);
     echo "<br/>";

     echo $date->format("dS M Y");
     echo "<br/>";

     echo $date->getTimeStamp();//seconds from 1970
     echo "<br/>";

     echo $date->getTimezone()->getName();//seconds from 1970
     echo "<br/>";
     
     $dateString='2016-10-27';
     $date=DateTime::createFromFormat('Y-m-d',$dateString);
     var_dump($date);
     echo "<br/>";
     echo $date->format('dS M Y');
     echo "<br/>";

     $date->setTimeStamp('1477576069');
     var_dump($date);
     echo "<br/>";
     echo $date->format('dS M Y');

     $date->setDate(2016, 10, 27);
     $date->setTime(12, 10, 27);
     var_dump($date); 