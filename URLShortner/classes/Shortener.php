<?php
    
    class Shortener{
         
         protected $db;

          public function __construct()
          {
          	//For demo purposes
             $this->db=new mysqli('localhost', 'root' ,'901014', 'website');  
          }

          public function makeCode($url)
          {
             $url=trim($url);

             if(!filter_var($url, FILTER_VALIDATE_URL))
             {
             	return '';
             } 

             $url=$this->db->escape_string($url);
             
             //check if url already exists
             $exists=$this->db->query("select code from links where url='{$url}' ");

             if($exists->num_rows)
             {
             	return $exists->fetch_object()->code;
             }else{
             	//generate and store url and code

             	//Insert record without a code
             	$this->db->query("Insert into links (url, created) values ('{$url}', now())");

             	//generate code based on the inserted ID
                $code=$this->generateCode($this->db->insert_id);

                //Update the record with the generated code
                $this->db->query("update links set code='{$code}' where url='{$url}'");

                return $code;
             }  
             
          }

          public function generateCode($num)
          {
             return base_convert($num, 10, 36);
          }
          

          public function getUrl($code)
          {
            $code=$this->db->escape_string($code);

            $code=$this->db->query("select url from links where code='{$code}' "); 

            if($code->num_rows)
            {
              return $code->fetch_object()->url; 
            } 

            return '';
          }

    }