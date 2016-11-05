<?php
     $fruits=array('apple','banana','orange','pear');
     reset($fruits);
     //reset the index and element of array
     while(list($key,$val)=each($fruits))
     {
     	echo "$key=>$val"."<br/>";
     }	
