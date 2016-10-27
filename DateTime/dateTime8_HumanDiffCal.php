<?php
     date_default_timezone_set("America/New_York");
     function diffForHumans(DateTime $date)
     {
         $currentDate=new DateTime;

         $difference=$currentDate->diff($date);

         $unit="second";
         $count=$difference->s;
         //second

         switch(true)
         {
            case $difference->y>0:
            $unit='year';
            $count=$difference->y;
            break;

            case $difference->m>0:
            $unit='month';
            $count=$difference->m;
            break;

            case $difference->d>0:
            $unit='day';
            $count=$difference->d;
            break;

            case $difference->h>0:
            $unit='hour';
            $count=$difference->h;
            break;

            case $difference->i>0:
            $unit='minute';
            $count=$difference->i;
            break;
         }

         if($count===0)
         {
         	$count=1;
         }

         if($count!==1)
         {
           $unit.='s';
         }	
        
        //invert=1 past invert=0 future
        $inversion=$difference->invert===0?'from now':'ago';
        
        return "{$count} {$unit} {$inversion}"; 
     }
   $date=new DateTime('2 days');
   echo diffForHumans($date);  