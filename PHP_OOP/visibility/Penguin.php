<?php
    class Penguin extends Bird
    {
      
       public function foots()
       {
       	echo $this->getLegCount();
       }

    }