<?php

     require 'Person_Constructor.php';

     $person=new Person('Edward Snowden','USA');
     // $person->name="Edward Snowden";
     // $person->country="USA";

     echo $person->sentense();