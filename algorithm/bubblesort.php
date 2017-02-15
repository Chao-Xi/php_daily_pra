<?php
    function bubblesort($arr=[])
    {
       $length=count($arr);
       for($i=1; $i<$length; $i++)//The most is length-1 times sort
       {
          $flag=false;
          for($j=$length-1; $j>=$i; $j--) 
          { 
          	if($arr[$j]<$arr[$j-1])
          	{
          	 $x=$arr[$j];
          	 $arr[$j]=$arr[$j-1];
          	 $arr[$j-1]=$x;
          	 $flag=true;
          	} //swap or not 
          }
       }
        if(!$flag)
           return $arr; 	
    }

    $arr=array(6,3,8,6,4,2,9,5,1);
    $arr1=bubblesort($arr);

    // var_dump($arr);
   echo "<pre".print_r($arr1)."</pre>";

   //best O(n)
   //average O(n2)
   //worst O(n2)