<?php
    class DB{
  	private static $_instance=null;
  	private $_pdo,
  	        $_query,
  	        $_error=false,
  	        $_results,
  	        $_count=0;


    private function __construct()
    {
     try{
        $this->_pdo=new PDO('mysql:host='.Config::get('mysql/host').';dbname='.Config::get('mysql/db'),Config::get('mysql/username'),Config::get('mysql/password'));

     }catch(PDOException $e)
     {
     	die($e->getMessage());
     }	
    }        
    
  // DB::getInstance()->query("select username from users where username=? or username=?", array('alex','billy'));   
  //sql parameter
   public function query($sql, $params=array())
   {
      $this->_error=false;
     if($this->_query=$this->_pdo->prepare($sql))
     {
     	$x=1;
     	if(count($params))
        {
          foreach($params as $param)
          {
          	$this->_query->bindValue($x, $param);
          	$x++;
          }	
        }
    //PDO=>BindValue();
         if($this->_query->execute())
        {
        	$this->_results=$this->_query->fetchAll(PDO::FETCH_OBJ);
        	$this->_count=$this->_query->rowCount();
        }else
        {
        	$this->_error=true;
        } 		
     }	
      return $this;  //Chain the method
   } 	

     public function action($action, $table, $where=array())
    {  //where=>'username', '=', 'alex'=>Three prameters
       //        'field','operators,'value  
      if(count($where)===3)
      {
      	$operators=array('=','>','<',">=",'<=');
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

     
      public function get($table, $where)
    {
      return $this->action('select *', $table, $where);	 
    }
    
    public function delete($table, $where)
    {
     return $this->action('delete', $table, $where);
    }  
    
    //Get the results
    $user=DB::getInstance()->query('select * from users');
    if(!$user->$count())
    {
    	echo "No user";
    }else
    {
    	foreach($user->results() as $user)
    	{
    	echo $user->username,"<br/>";
    	echo $user->first()->username;	
    	}	
    } 

      public function results()
    {
     return $this->_results;	
    }
     
    public function first()
    {
      return $this->_results[0];	
    }

    //First result:$user->first()->username

   //Insert
   $userInsert=DB::getInstance()->insert('users',array(
     'username'=>'Dale',
     'password'=>'password',
     'salt'=>'salt'
     ));  
    //table fields
    if($userInsert)
    {
     //success
    }


    public function insert($table, $fields=array())
    {
      if(count($fields))
      { 
      	$keys=array_keys($fields);
      	$values='';
      	$x=1;

      	foreach($fields as $field)
      	{    
      		$values.='?';
      		if($x<count($fields))
      		{
      		  $values .=', ';	
      		}
          $x++; 
      	}
        $sql="insert into {$table} (`".implode('`, `', $keys)."`) values ({$values})";
        
        // echo $sql;
        // die();
        if(!$this->query($sql, $fields)->error())
        {
          return true;
        } 
        }
         return false;	
    }
	

	   //Insert
   $userInsert=DB::getInstance()->update('users','3',array(
     'password'=>'newpassword',
     ));  
    //table fields
    if($userInsert)
    {
     //success
    }