<?php
   $string='The weather is sunny';

   if(strpos($string, 'sunny'))
    //strpos($string, 'sunny', -15) will work at php7.0
   {
   	echo 'Good Weather'.'<br/>';
   }

   $name='alex';
   echo $name[strlen($name)-1];

   echo $name[-2];//will work at php 7.0

