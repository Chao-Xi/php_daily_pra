<?php
    $fruits=array('appale','banana','orange','papaya','pear','grape','lemon','watermelon');
    $fruit="papaya";
    if(in_array($fruit, $fruits))
     {
      echo "$fruit already in array"."<br/>";
     }

     $founded=array_search("papaya", $fruits);
     echo "The index of frounded element is ".$founded.'</br>';	

     $values=array_values($fruits);
     print_r($values);