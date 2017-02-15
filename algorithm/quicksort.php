<?php
   function quick_sort($arr=[])
   {
   	if(!is_array($arr)) return false;
    
    if(count($arr)<=1) return $arr;
    
    $left=$right=array();

    for($i=1; $i<count($arr); $i++)
    {
        if($arr[$i]<$arr[0])
        {
          $left[]=$arr[$i];	
        }else
        {
          $right[]=$arr[$i];	
        }	
    }	
      
      $left=quick_sort($left);
      $right=quick_sort($right);

      return array_merge($left, array($arr[0]), $right);       
   }

   $arr1=array(6,3,8,6,4,2,9,5,1);
   echo "<pre>".print_r(quick_sort($arr1), true)."</pre>";
  
  //best: O(n)
  //Averge: O(n logn)
  //Worst: O(n2)  