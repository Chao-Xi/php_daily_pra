<?php

     class Chest{
            
            protected $lock;
            protected $isClosed;
            
            //specify the parameter before the argument (Lock $lock)=>Depedence Injection
            //Constrcut inject the class and class->object
            public function __construct(Lock $lock)
            {
               $this->lock=$lock;	
            }
            

            public function close($lock=true)
            {
                if($lock===true)
                {
                $this->lock->lock()	;
                }	
              
               $this->isClosed=true;

               echo "Closed"."<br/>";
            }
            

            public function open()
            {
            	if($this->lock->isLocked())
            	{
            	  $this->lock->unlock();	
            	}
            	$this->isClosed=false;

            	echo "Opened"."<br/>";
            } 
            

            public function isClosed()
            {
           	return $this->isClosed;
            }
     }