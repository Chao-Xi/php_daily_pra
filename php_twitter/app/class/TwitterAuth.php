<?php
 class TwitterAuth{
      
      protected $db; 

      protected $client;

      protected $clientCallback="http://www.phptwitter.dev/callback.php";

     public function __construct(DB $db, \Codebird\Codebird $client)
     {  
     	$this->db=$db;
     	$this->client=$client;
     	//var_dump($this->client);    
     }
    
     public function getAuthUrl()
     {
         $this->requestTokens();
         $this->verifyTokens();

          return $this->client->oauth_authenticate(); 
     }
     
     public function signedIn()
     {
     	return isset($_SESSION['user_id']);
     }
     
     public function SignIn()
     {
     	if($this->hasCallback())
        {
        	$this->verifyTokens();
            $reply=$this->client->oauth_accessToken(['oauth_verifier'=>$_GET['oauth_verifier']]); 
            
            if($reply->httpstatus===200)
            {
            	$this->storeTokens($reply->oauth_token,$reply->oauth_token_secret);
                
                $_SESSION['user_id']=$reply->user_id;   
            	//store the user here
                $this->storeUser($reply); 
            	return true;
            }

            // var_dump($reply);
            // die();

        	return true;
        }
        return false;		
     }
      
    public function signOut()
    {
      unset($_SESSION['user_id']);
    } 

     protected function hasCallback()
    {
      return isset($_GET['oauth_verifier']);
    }
   

     protected function requestTokens()
     {
     	$reply=$this->client->oauth_requestToken([
            'oauth_callback'=>$this->clientCallback
     		]);
     	// var_dump($reply);
     	$this->storeTokens($reply->oauth_token, $reply->oauth_token_secret);
     }
     
     protected function storeTokens($token,$tokenSecret)
     {
     	$_SESSION['oauth_token']=$token;
     	$_SESSION['oauth_token_secret']=$tokenSecret;
     } 

     protected function verifyTokens()
     {
     	$this->client->setToken($_SESSION['oauth_token'],$_SESSION['oauth_token_secret']);
     }

     protected function storeUser($payload)
     {
        $this->db->query("Insert INTO twitter_user (twitter_id, twitter_username) values ('{$payload->user_id}','{$payload->screen_name}') on duplicate key update id=id");
     }
 }