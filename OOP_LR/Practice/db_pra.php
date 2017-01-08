<?php
   class DB{
       
       private static $_instance=null;
       //underscore means private variables

       private $_pdo, 
               $_query,
               $_error,
               $_results,
               $_count=0;

       public function __construct()
       {
       	try{
       		$this->_pdo=new PDO('mysql:host='.Config::get('mysql/host').';dbname='.Config::get('mysql/db'), Config::get('mysql/username'), Config::get('mysql/password'));
       	}catch(PDOException $e)
       	{
       	  die($e->getMessage());	
       	}
       }  

      //Get connect the database once, dont have to connect multiple times
      public static function getInstance()
      {
      	if(!isset(self::$_instance))
      	{
      	  self::instance=new DB();
      	}
      	return self::$_instance;	
      }

      public function query($sql, $params=array())
      {
      	$this->_error=false;
      	if($this->_query=$this->_pdo->prepare($sql))
        {
           $x=1;
           if(count($params))
           {
           	 $this->_query->bindValue($x, $param);
           	 $x++;
           }	
        }
        if($this->_query->execute())
        {
        	$this->_results=$this->_query->fetchAll(PDO::FETCH_OBJ);
        	$this->_count=$this->_query->rowCount();
        }else
        {
        	$this->_error=true;
        }
         return $this;		
      }
     
     public function action($action, $table, $where=array())
     {   
     	//where name = alex
     	if(count($where)===3)
        {
        $operator=array('=','>',"<",">=","<=");
        $field=$where[0];
        $operator=$where[1];
        $value=$where[2];

        if(in_array($operator, $operators))
         {
          $sql="{$action} from {$table} where {$field} {$operator} ?";
          if(!$this->query($sql, array($value))->error())
          {
          	return $this;
          }	
         }	
        }		
        return false;
     }

    public function get($table, $where)
    {
    	return $this->action('select *', $tbale, $where);
    }
    
    public function delete($table, $where)
    {
      return $this->action('delete', $table, $where);	
    }
    
    public function resluts()
    {
    	return $this->_results;
    }
    
    public function first()
    {
      return $this->_results[0];	
    } 

    public function insert($table, $fields=array())
    {
    	if(count($fields))
    	{
    		$key=array_keys($fields);
    		$values='';
    		$x=1;

    	 foreach($feilds as $feild)
    	 {
    	   $value=."?";
    	   if($x<count($feilds))
    	   {
    	   	$values .=", ";
    	   }
    	   $x++; 	
    	 }	
    	
     $sql="insert into {$table} ('".implode('', '',$key)."') values ({$values})";
     
     if(!$this->query($sql, $fields)->error()){
     	return ture;
     }		
    }
     return false;
    }


    public function update($table, $id, $fields)
    {
    	$set='';
    	$x=1;

    	foreach($fields as $name=>$value)
    	{
    	  $set.="{$name}= ?";
    	  if($x<count($fields))
    	  {
    	  	$set.=', ';
    	  }	
    	$x++;	
    	$sql="update {$table} set {$set} where id={$id}";

    	if(!$this->query($sql, $fields)=>error() )
    	{
    	  return true;
    	}
    	return false;	
     }
    }

    public function error()
    {
    	return $this->_error;
    }


    public function count()
    {
    	return $this->_count;
    }
   }
