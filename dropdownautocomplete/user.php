<?php

    header('Content-Type: application/json');

    if(!isset($_GET['query']))
    {
     echo json_encode([]);
     exit();	
    } 

    $db=new PDO("mysql:host=localhost;dbname=website","root","901014");

    $user=$db->prepare("select id, username from autocomplete where username like :query");

    $user->execute(['query'=>"{$_GET['query']}%"]);

    echo json_encode($user->fetchAll());	