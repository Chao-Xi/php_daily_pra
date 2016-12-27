<?php
      $array=[
               'name'=>['Your name is required',
                        'Your name cannot contain any number',
                        'inner'=>['some value']
                        ],

                'dob'=>['Your date of birth is required'],
                
                'password'=>[
                        'Your password must be 6 characters or more',
                        'Your password isn\'t strong enough'    
                            ],
                'Somthing else'   //string inside                  
            ];
        
       $flattened0=new RecursiveArrayIterator($array);
       var_dump($flattened0);
       
       echo "<br/>";
         
       $flattened=iterator_to_array(new RecursiveIteratorIterator(new RecursiveArrayIterator($array)),false);     
       var_dump($flattened);