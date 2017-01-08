<?php  
  public function login($username=null, $password=null, $remember=false)
    { 
      if(!$username && !$password && $this->exists())
      {
        Session::put($this->_sessionName, $this->data()->id);
      }  
     else
     {
      $user=$this->find($username);
      if($user)
       {
        if($this->data()->password===Hash::make($password, $this->data()->salt))
          //Password match
         {
          Session::put($this->_sessionName,$this->data()->id);

          if($remember)
          {
            $hash=Hash::unique();
            $hashCheck=$this->_db->get('users_session',array('user_id','=',$this->data()->id));
            // var_dump($this->data()->id);
            // die();

            if(!$hashCheck->count())
            {
              $this->_db->insert('users_session',array(
                 'user_id'=>$this->data()->id,
                 'hash'=>$hash
                ));
             // echo $this->_db; 
             // die() 
            }
            else
            {
              $hash=$hashCheck->first()->hash;
            } 
            cookie::put($this->_cookieName, $hash, Config::get('remember/cookie_expiry'));
          }

          return true;
         } 
       }
      } 
        return false;
    }

    ?>