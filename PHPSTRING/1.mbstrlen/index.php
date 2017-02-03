<?php
  $string="Ä";
  echo "String: ".$string."<br>";
  echo "strlen: ".strlen($string)."<br>";
  echo "mb_strlen: ".mb_strlen($string)."<br>";
  echo "mb_strlen(UTF-8): ".mb_strlen($string, "UTF-8")."<br>";

  //mb_internal_encoding("UTF-8");