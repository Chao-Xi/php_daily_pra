<?php
     require 'Chest.php';
     require 'Lock.php';

     $chest=new Chest(new Lock);
     $chest->close();

     $chest->open();