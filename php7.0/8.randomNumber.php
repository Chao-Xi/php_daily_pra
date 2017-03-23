<?php
  echo rand(1,52)."<br/>";

  echo mt_rand(1, 52)."<br/>";//php 7.0

  $names=['alex', 'billy', 'cole'];
  echo array_rand($names)."<br/>";
  echo $names[array_rand($names)];

  // echo random_int(1, 52); php7.0
  // echo random_bytes(255); php 7.0
  //bin2hex(random_bytes(255));