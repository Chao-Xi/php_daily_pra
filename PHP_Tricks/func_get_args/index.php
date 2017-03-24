<?php
    function add(array $numbers)
    {
    	$total=0;

    	foreach ($numbers as $number) {
    		$total += $number;
    	}

    	return $total;
    }

    $arr=[5,10, 15, 75];

    echo add($arr);