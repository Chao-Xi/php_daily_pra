<?php
  
  class User
  {
  	public $id=50;
  }
   
  class Post{
    
    public $id=5;
    public $user_id=50;

    public function ownedByUser(?User $user)
    {
      if($user ===null)
      {
      	return false;
      }	
      return $user->id===$this->user->id;
    }

    $post=new Post;
    $user=new User;

    var_dump($post->ownedByUser($user));

  } 

 ?>