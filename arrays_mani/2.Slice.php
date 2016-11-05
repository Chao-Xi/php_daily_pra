<?php
    //array_slic(array array, int offset[,int length]);
    $fruits=['appale','banana','orange','papaya','pear','grape','lemon','watermelon'];
    $subset=array_slice($fruits, 4);
    print_r($subset);
    //Array ( [0] => pear [1] => grape [2] => lemon [3] => watermelon )
    echo "<br/>";
    $subset2=array_slice($fruits, 2, -2);
    print_r($subset2);
    //Array ( [0] => orange [1] => papaya [2] => pear [3] => grape )
    //length<0 count(input_array)-|length|=>end place
    //start 2 and end at (8-2)=6  
