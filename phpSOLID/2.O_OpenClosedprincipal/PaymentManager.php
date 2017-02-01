<?php
   class PaymentManager{

    protected $paymentMethod;

    public function __construct(paymentMethodInterface $paymentMethod)
    //Dependency Injection
    {
       $this->paymentMethod=$paymentMethod;
    }

    public function process()
    {
      $this->paymentMethod->processPayment();	
    }

   }