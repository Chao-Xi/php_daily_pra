<?php
     $fruits=array('apple','banana','pear');
     $numbered=array("1","2","3");
     $cards=array_merge($fruits,$numbered);
     print_r($cards);
     //Array ( [0] => apple [1] => banana [2] => pear [3] => 1 [4] => 2 [5] => 3 )
     echo "<br/>";
     $fruits1=array("apple"=>"red","banana"=>"yellow");
     $fruits2=array("apple"=>"green","pear"=>"yellow");
     $results=array_merge_recursive($fruits1,$fruits2);
     print_r($results);
     //Array ( [apple] => Array ( [0] => red [1] => green ) [banana] => yellow [pear] => yellow )
     echo "<br/>";
     $name=array('apple','banana','pear');
     $color=['red','green','yellow'];
     $fruits3=array_combine($name, $color);
     print_r($fruits3);
     //Array ( [apple] => red [banana] => green [pear] => yellow )


