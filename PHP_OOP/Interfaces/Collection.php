<?php
    class Collection implements Countable, JsonSerializable{
             
             //Countable, JsonSerializble is default PHP interfaces

             protected $items=[];
          

             public function add($value)
             {
             	$this->items[]=$value;
             } 
             

             public function set($key, $value)
             {
             	$this->items[$key]=$value;
             }


             public function JsonSerialize()
             {
             	return json_encode($this->items);
             } 
             

             public function count()
             {
             	return count($this->items);
             }     
    }
?>