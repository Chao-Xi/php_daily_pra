<?php
   $logger=new Logger();
   $errorHandler=new errorHandler($logger);

   set_error_handler(function ($errno, $errstr, $errfile, $errline) use ($errorHandler) {
     return $errorHandler->error($errno, $errstr, $errfile, $errline); 
   });

    set_error_handler(function ($exception) use ($exception) {
     return $errorHandler->error($exception); 
   });