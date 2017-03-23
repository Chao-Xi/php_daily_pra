1.  : ?
     public function getName() : ? string
   	 {
   	 	return $this->name;
   	 }

 2.  
    $response=['alex', '27', 'blue'];
    [$name, $age, $color]=$response; => like list 
 
 
 3.
    $name='alex';
    echo $name[strlen($name)-1]; => 5.0+

    echo $name[-2];  => 7.0+

 4.	public function registerService() : void    

 5. public const VAT=50.00 ; //php 7.0 const can appended behind the visiblity

 6. try{
	$gateway->charge('123')
    }catch{
	InsufficientFundsException | HardDeclineException | SecurityViolationException $e  
	//php 7.0 group similar exception in a group 
   }{
	$error='Sorry, declined.';
   }catch(PaymentMethodNotSupportedException $e)
  {
	$erro='Sorry, we dont accept that card'
  }
  //can catch group error in php7.0 

7.   rand(1,52)    //5.0

     mt_rand(1, 52)  //5.0 or 7.0

     $names=['alex', 'billy', 'cole'];
     echo array_rand($names)."<br/>"; =>keys
     echo $names[array_rand($names)]; =>values

     random_int(1, 52); php7.0
     random_bytes(255); php 7.0  
     bin2hex(random_bytes(255)); 

 8. default
    class User
   {
  	public function avatar($size, $default='default.jpg')  //php 7.0 less warning showed on page
  	{
  		return 'avatar.jpg?s='.$size;
  	}
   }    
