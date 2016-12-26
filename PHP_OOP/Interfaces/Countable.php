<?php
     class Collection implements Countable
     {
         protected $items=[];

         public function __construct(array $items)
         {
         	$this->items=$items;
         }

         public function count()
         {
         	return count($this->items);
         }
     }

        $collection=new Collection(range(1,10));
        echo "Call tradtional function: ".$collection->count()."<br/>";

        echo "Call interfacce function: ".count($collection);