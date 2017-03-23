<?php
   
   class SomeService
   {
   	public function __construct()
   	{
   		$this->registerService();
   	}

   	public function registerService() : void //7.0 doesnt return anything
   	{
   		//register
   		//service
   		//here
   	}
   }

   $service=new SomeService;

?>