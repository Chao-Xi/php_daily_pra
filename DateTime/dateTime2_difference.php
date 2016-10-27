<?php

    $date=new DateTime;
    $nyhalloweenparade=(new DateTime('31 October'))->setTime(19, 30, 00);
    $timeToHalloween=$date->diff($nyhalloweenparade);

    var_dump($timeToHalloween);
    print_r($timeToHalloween->days);
    echo "<br/>";
    echo $timeToHalloween->format('%m months %d days %h hours');