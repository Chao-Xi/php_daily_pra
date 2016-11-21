<?php
    
    session_start();

    require_once 'vendor/autoload.php';
    require_once 'app/class/DB.php';
    require_once 'app/class/TwitterAuth.php';

    $db=new DB;
    \Codebird\Codebird::setConsumerkEY('OjR7kcSmmlBsIaxMKATSU9FtW','2NCFoVWUcTCeNQ75RCtr8LZpDUKV649fUc5FVd0ftMm8eTbFbh');
    $client=\Codebird\Codebird::getInstance();

    //var_dump($client);