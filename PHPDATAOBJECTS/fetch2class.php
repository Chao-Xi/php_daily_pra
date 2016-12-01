<?php
   try{
       $handler=new PDO('mysql:host=127.0.0.1;dbname=cms1','root','901014');
       $handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      }
    catch(PDOException $e)
    {
      echo $e->getMessage();
      die();
    }     
   
   


    class PageinfoEntry{
        public $id, $label, $slug, $title, $body,
               $entry;      
        
        public function __construct()
        {
         $this->entry="{$this->label} contains {$this->body}";	
        } 

    }
   


    $sql="select * from page";
    $pageQuery=$handler->query($sql);
    $pageQuery->setFetchMode(PDO::FETCH_CLASS, "PageinfoEntry");
    while($res=$pageQuery->fetch())
    {
      // echo '<pre>'.print_r($res).'</pre>';
      echo $res->entry."<br/>";	
    } 	

