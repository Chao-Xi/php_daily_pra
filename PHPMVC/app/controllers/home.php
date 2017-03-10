<?php
  class Home extends Controller
  { 

  	public static function index($name=' ')
  	{
  		  // echo 'home/index/'.$name;
        
        // $user=self::model('User');
        // $user->name=$name;

        self::view('home/index',['name'=>$user->name]);
  	}

  	public static function create($username='', $email='')
    {
         User::create([
            'username'=>$username,
            'email'=>$email,
          ]);
    }


  }