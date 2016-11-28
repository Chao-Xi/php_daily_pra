<?php

     class Database{
        
        public static $instance;

        public function getInstance()
        {
        	if(!static::$instance)
            {
            	static::$instance=new self;
            }

            return static::$instance;
        }


        public function query($sql)
        {
           echo $sql;
        }


     }