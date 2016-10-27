<?php 
     $numbers=[4,4,10,1,52,69];
     usort($numbers, function($first,$second){
         if($first=$second)
         {
         	return 0;
         }
         return ($first>$second)? 1: -1;}	
     	);
     //return 0 a equals to b
     //return －1 a and b dont need switch
     //return 1   a and b need switch 
     var_dump($numbers);