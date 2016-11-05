 <?php

     $fruits=array('red'=>'Apple','yellow'=>'Banana','orange'=>'Orange');
     while ($fruit=current($fruits)) {
     	 echo $fruit."<br/>";
     	 next($fruits);
     }