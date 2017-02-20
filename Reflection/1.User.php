<?php
    namespace Acme; 

    class User{
    
    protected $loggedIn=false;
    protected $data=[
      'username'=>'Alex',
      'password'=>'password',
      'lastloggedIn'=>'2017-2-19'
    ];

    public function getData()
    {
      return $this->data;	 
    } 
    
    public function setData(array $data)
    {
       $this->data=$data;	
    }

    public function isLoggedIn() 
    {
      return $this->isLoggedIn;	
    } 
   }
 ?>  