1.generate: return $_SESSION['token']=base64_encode(openssl_random_pseudo_bytes(32));
2.Check:   if(isset($_SESSION['token']) && $_SESSION['token']===$token)
           {
           	 unset($_SESSION['token']);
           	 return true;
            }
             return false;	
            } 
       $token=$_POST['token']    