<?php
    require_once 'Bird.php';
    require_once 'Penguin.php';

    $penguin=new Penguin(false, 2);

    $penguin->foots();


    echo "<br/>";

    echo $penguin->legCount;
    //cannot call the protcted variable or function from outside