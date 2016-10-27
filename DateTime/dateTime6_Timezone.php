<?php
     

    $date=new DateTime;
    $date->setTimezone(new DateTimeZone('America/New_York'));
    var_dump($date);

    $date1=new DateTime('now',new DateTimeZone('America/New_York'));
    var_dump($date1);

    var_dump(DateTimeZone::listIdentifiers());
     
     $timezone="America/New_York";
     date_default_timezone_set($timezone);
     $date2=new DateTime;
     var_dump($date2);