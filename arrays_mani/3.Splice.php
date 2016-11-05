<?php
   $fruits=array('appale','banana','orange','papaya','pear','grape','lemon','watermelon');
   $subset=array_splice($fruits,4);
   //splice from start and length=4
    print_r($fruits);
   //currently, $fruits left 4
   //Array ( [0] => appale [1] => banana [2] => orange [3] => papaya )  
    echo "<br/>";
    print_r($subset);
    //extract 4 from  
    //Array ( [0] => pear [1] => grape [2] => lemon [3] => watermelon )

 ?>