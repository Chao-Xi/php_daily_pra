<?php
  //merge sort code
  //https://blog.phpha.com/backup/archives/1683.html 
   function mergeSort(&$arr)
   {
   	  $length=count($arr);
   	  mSort($arr, 0, $length-1);
   }

   function mSort(&$arr, $left, $right)
   {
   	 if($left<$right)
   	 {
   	 	$center=floor(($left+$right)/2);
   	 	mSort($arr, $left, $center);
   	 	mSort($arr, $center+1, $right);
   	 	mergeArray($arr, $left, $center, $right);
   	 } 
  } 
   	 function mergeArray(&$arr, $left, $center, $right)
   	 {
   	 	$a_i=$left;
   	 	$b_i=$center+1;
   	 	while($a_i<=$center && $b_i<=$right)
   	 	{
   	 		if($arr[$a_i]<$arr[$b_i])
   	 		{
   	 		  $temp[]=$arr[$a_i++];	
   	 		}else
   	 		{
   	 		   $temp[]=$arr[$b_i++];	
   	 		}	
   	 	}

   	 	while($a_i<=$center)
   	 	{
   	 	   $temp[]=$arr[$a_i++];
   	 	}

   	 	while($b_i<=$right)
   	 	{
   	 	 $temp[]=$arr[$b_i++];
   	 	}

   	 	for($i=0, $length=count($temp); $i<$length; $i++)
   	 	{
   	 	  $arr[$left+$i]=$temp[$i];	
   	 	}	
   	 }  
 

   $arr=array(4, 7, 6, 3, 9, 5, 8);
   mergeSort($arr);
   echo "<pre".print_r($arr,true)."</pre>";