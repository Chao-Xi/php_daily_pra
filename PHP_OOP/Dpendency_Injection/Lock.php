<?php
    class Lock{

        protected $isLocked;

        public function lock()
        {
          $this->isLocked=true;	
        }

         public function unLock()
        {
          $this->isLocked=false;	
        }
 

        public function isLocked()
        {
        	return $this->isLocked;
        }


    }