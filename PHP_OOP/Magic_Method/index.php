<?php
     require 'Collection.php';

     $c=new Collection();

     $c->add('foo');
     $c->add('bar');
     
     //from magic method __set()
     $c->baz='qux';

     echo "<pre>".print_r($c->all(),true)."</pre>";
     
     //from the magic method __get()
     echo $c->baz."<br/>";
      
      //from magic method __call() 
     echo $c->foo('foo', 'bar', 'baz', 'qux');
     
     echo "<br/>";

     echo $c;

