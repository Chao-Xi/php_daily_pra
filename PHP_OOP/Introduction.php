<?php
   //Objects
   $object=new StdClass;
   $object->names=['john','Billy','Susan','Max'];

   foreach($object->names as $names)
   {
   	echo $names."<br/>";
   }