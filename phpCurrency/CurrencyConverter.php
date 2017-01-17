<?php
    namespace Practice\Utilities;
    class CurrencyConverter implements CurrencyConverterInterface
    {    
    	 protected $currencyUrl='http://api.fixer.io';

    	 protected $convertEndpoint="latest?base=%s&symbols=%s";
    	 //%s->string(not random)
    	 // http://api.fixer.io/latest?base=USD
    	 // http://api.fixer.io/latest?symbols=USD,GBP
         public function convert(array $conversions)
         {
            $results=[];
            $finalres=[];
            if(count($conversions)===3)
            {
             $base=$conversions[0];
             $symbols=$conversions[1];
             
            //implode('separator',$arr);
            //$query=implode(',', $conversions); 
            //echo $conversion,"<br/>";	
            
            //sprintf
            //<?php
            //$number = 2;
            //$str = "Shanghai";
            //$txt = sprintf("There are %u million cars in %s.",$number,$str);
            //echo $txt;
            //There are 2 million cars in Shanghai.
            if(is_array($symbols))
            {
              $symbols=implode(",", $symbols);	
            }
            //Build up URL
            $convertEndpoint=sprintf($this->convertEndpoint,$base,$symbols);
            $url="{$this->currencyUrl}/{$convertEndpoint}";
            // echo $url;
            $response=json_decode($this->curlRequest($url), true);
             // var_dump($response);
             // die();

            //Build up a results
            if(is_numeric($conversions[2]))
            {
              foreach($response['rates'] as $key=>$rate)
              {
                $results[]= $conversions[2]*$rate." ".$key;
              }	
            }
             
             foreach($results as $result)
             {
              $finalres[]=$conversions[2]. ' of '. $conversions[0]. ' is '.$result;
             }	
            
             return $finalres;      
           }
          
         }

         public function getCurrencies()
         {

         }

         public function curlRequest($url)
         {
         	$curl=curl_init();
         	curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
         	curl_setopt($curl, CURLOPT_URL, $url);

         	return curl_exec($curl);
         }
    }