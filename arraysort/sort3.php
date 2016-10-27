<?php
    $files=['img1.png','img12.png','img10.png','img2.png'];
    natsort($files);
    //sort=> 1 10 12 2
    //nature sort=>natsort 1 2 10 12
    var_dump($files);