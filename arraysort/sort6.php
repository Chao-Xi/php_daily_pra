<?php
     $numbers=['23','343','3','5','7783','21','27xichao'];

     array_multisort($numbers,SORT_DESC,SORT_NUMERIC);
     //array_multisort($numbers,SORT_DESC,SORT_STRING); 
    //array_multisort($files,SORT_ASC,SORT_NATURAL);

     //array_multisort($arr1,$arr2);
     var_dump($numbers);