<?php
    //1.Key()
     $fruits1=array('red'=>'Apple','yellow'=>'Banana','orange'=>'Orange');
     while($key=key($fruits1))
     {
     	print_r($key);
     	echo "<br/>";
     	next($fruits1);
     	//next() move to next index
     }	
      
     //2.array_key_exitsts() 
      $fruit['apple']='red';
      $fruit['Banana']='yellow';
      $fruit['pear']='green';

      if(array_key_exists('apple', $fruit))
      {
      	 echo "Apple's color is: ".$fruit['apple']."<br/>";
      }  
         if(array_key_exists('yellow', $fruits1))
      {
      	 echo "Yellow color is: ".$fruits1['yellow']."<br/>";
      }
      
      //3.array_keys()
      $keys=array_keys($fruit);
      print_r($keys); 
      Array ( [0] => apple [1] => Banana [2] => pear ) 


     
     