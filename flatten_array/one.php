<?php

     $array=[
               'name'=>['Your name is required',
                        'Your name cannot contain any number'],

                'dob'=>['Your date of birth is required'],
                
                'password'=>[
                        'Your password must be 6 characters or more',
                        'Your password isn\'t strong enough'    
                            ],
                'Somthing else'   //string inside                  
            ];

    function  flatten_array(array $items, array $flattened=[])
    {
    	foreach($items as $item)
        {
          if(is_array($item))
          {
          	$flattened=flatten_array($item, $flattened);
          	continue;   //If $item is array, start a another loop, 
          }	

         $flattened[]=$item;  //if it's not, finish the rest of loop 
        }

       return $flattened;  		
    } 

      var_dump(flatten_array($array));     