<?php
  $email=$_POST['email'];
  
$data = array(
            'secret' => "6Lc2_AsUAAAAAPnDzg-R1OIQ7oAbgzwJL0dQuuHB",
            'response' => $_POST['g-recaptcha-response']
        );

$verify = curl_init();
curl_setopt($verify, CURLOPT_URL, "https://www.google.com/recaptcha/api/siteverify");
curl_setopt($verify, CURLOPT_POST, true);
curl_setopt($verify, CURLOPT_POSTFIELDS, http_build_query($data));
curl_setopt($verify, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($verify, CURLOPT_RETURNTRANSFER, true);
$response =json_decode(curl_exec($verify));  
if(!$response->succsss)
{
	//redirect with error
}

//register your user
var_dump($response);
