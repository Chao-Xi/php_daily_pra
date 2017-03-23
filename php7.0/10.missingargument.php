<?php
  class User
  {
  	public function avatar($size, $default='default.jpg')  //php 7.0 less warning showed on page
  	{
  		return 'avatar.jpg?s='.$size;
  	}
  }

  $user=new User;
  echo $user->avatar();