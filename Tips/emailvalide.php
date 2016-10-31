<?php
    $validEmail='email@example.com';
    $invalidEmail='Hello world';

    //$isValid=preg_match('/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[_a-z0-9-]+(\.[_a-z0-9-]+)*(\.[a-z]{2,4})$/', $validEmail);
    $isValid=filter_var($validEmail,FILTER_VALIDATE_EMAIL);
    if($isValid){
    	echo "valid e-mail provided";
    }else{
    	echo "Invalid e-mail provided";
    }