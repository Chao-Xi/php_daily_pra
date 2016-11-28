<?php

     require 'Person.php';

     $person=new Person;
     $person->name="Edward Snowden";
     $person->country="USA";

     echo $person->sentense();