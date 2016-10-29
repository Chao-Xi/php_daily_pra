<?php
   $url="http://www.thexichao.com:8800/catalog/items/1?color=red&number=1#top";
   $parseURL=parse_url($url);
   echo "<pre>".print_r($parseURL,true)."</pre>";
   

   $path=explode('/',$parseURL['path']);
   print_r($path);
   echo "<br/>";
   echo $path[1];