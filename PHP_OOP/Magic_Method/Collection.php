<?php
    class Collection implements Countable, JsonSerializable{
             
           //Magic method
           //__set()  __get() __call() __toString
            
             protected $items=[];
          
             public function __set($key, $value)
             {
                $this->set($key,$value);  
             }
             
             public function __get($value)
             {
                 return $this->get($value); 
             }
             
             public function __call($func, $args)
             {
               echo $func. ' has been called with arguments '.implode(', ', $args);
             }
             

             public function __toString()
             {
               return $this->JsonSerialize();
             }

             public function add($value)
             {
             	$this->items[]=$value;
             } 
             
             public function all()
             {
                  return $this->items;
             } 

             public function set($key, $value)
             {
             	$this->items[$key]=$value;
             }
             
             public function get($key)
             {
                return array_key_exists($key, $this->items)? $this->items[$key] :null;  
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