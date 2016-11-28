<?php

     require 'Database.php';
     require 'User.php';

     $user=new User(new Database);

     $user->create(['username'=>'Terry']);