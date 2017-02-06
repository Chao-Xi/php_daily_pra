<?php 
 $expiry=new DateTime('+2 days');
 setcookie('data', 'NFL today', $expiry->getTimeStamp());
 ?>