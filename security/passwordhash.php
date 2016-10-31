<?php
    $unhashedpw='ILOVENYC';
    $hashedpw=password_hash($unhashedpw,PASSWORD_DEFAULT,['cost'=>12]);
    echo $hashedpw;
    echo "<br/>";
    $result=password_verify($unhashedpw,$hashedpw);
    var_dump($result);
?>    