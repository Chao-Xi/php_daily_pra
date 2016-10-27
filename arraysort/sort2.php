<?php
     $names=['alex'=>26,'dale'=>56,'billy'=>22,'ashly'=>52];
     $numbers=['23','343','3','5','7783','21'];
     //sort "sort the value and lose the key"
     //asort keep the key
     
     asort($names);
     var_dump($names);
     echo "<br/>";

     asort($numbers);
     var_dump($numbers);
     echo "<br/>";