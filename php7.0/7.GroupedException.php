<?php
   class InsufficientFundsException extends Exception
   {
   	//
   }

    class HardDeclineException extends Exception
   {
   	//
   }

    class SecurityViolationException extends Exception
   {
   	//
   }

   class PaymentMethodNotSupportedException extends Exception
   {
   	//
   }

   class Braintree
   {
   	public function charge($token)
   	{
     if(true)
    {		
   	 throw new InsufficientFundsException;
   	}
   	else
   	{
   		throw new PaymentMethodNotSupportedException;
   	}	
   }
 }   

$gateway=new Braintree;
$error=null;

try{
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

die('redirect with error'.$error);