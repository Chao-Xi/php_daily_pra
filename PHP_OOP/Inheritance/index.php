<?php
    require_once 'Bird.php';
    require_once 'Pigeon.php';

    $pigeon=new Pigeon(true, 2);

    if($pigeon->canFly())
    {
    	echo "Can Fly";
    } 	