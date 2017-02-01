<?php
   class ErrorHandler{

     protected $logger;

     public function __construct(Logger $logger)
     {
     	$this->logger=$logger;
     }
     
     public function error($errno, $errstr, $errfile, $errline)
     {
     	$this->logger->log('Error: '. $errstr);
     }
    
    public function exception(Exception $exception)
    {
    	$this-.logger->log('Error: '.$exception);
    }


   }