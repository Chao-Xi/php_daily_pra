<?php
    require_once 'CurrencyConverterInterface.php';
    require_once 'CurrencyConverter.php';
    
    $converter=new Practice\Utilities\CurrencyConverter;

    $results=$converter->convert(['USD',['CNY','CAD','RUB'],100]);

    foreach($results as $result)
    {
      echo $result."<br/>";
    } 	

     