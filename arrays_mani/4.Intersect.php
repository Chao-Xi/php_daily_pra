<?php
     $fruits1=array('Apple','Banana',"Orange");
     $fruits2=array('Pear','Apple',"Orange");
     $fruits3=array('Orange','Papaya',"Apple");

     $intersection=array_intersect($fruits1, $fruits2, $fruits3);
     print_r($intersection);
     //Array ( [0] => Apple [2] => Orange ) 
     echo "<br/>";


     $fruits4=array('red'=>'Apple','yellow'=>'Banana','orange'=>'Orange');
     $fruits5=array('pink'=>'Pear','red'=>'Apple','orange'=>'Orange');
     $fruits6=array('orange'=>'Orange','orange1'=>'Papaya','red'=>'Apple');

     $intersection=array_intersect_assoc($fruits4, $fruits5, $fruits6);
     print_r($intersection);
     //Array ( [red] => Apple [orange] => Orange )


