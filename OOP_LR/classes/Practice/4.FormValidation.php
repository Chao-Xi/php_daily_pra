Input.php
<?php
  class Input{
  	public static function exists($type="post")
  	{
  	   switch($type)
  	   {
  	   	case 'post':
  	   	return (!empty($_POST))?true:false;
  	   	break;

  	   	case 'get':
  	   	return (!empty($_POST)) ? true:false;
  	   	break;

  	   	default:
  	   	return false;
  	   	break;
  	   }	
  	}
  

  public static function get($item)
  	{
  		if(isset($_POST[$item]))
  		{
  		   return $_POST[$item];	
  		}elseif(isset($_GET[$item]))
  		{
  		   return $_GET[$item];	
  		}
  		return '';	
  	}

 }
 
?>




 Register.php
 <?php 

   if(Input::exists())
   {
   	echo Input::get('username'); 
   	$validate=new Validate();
   	$validation=$validate->check($_POST,array(
   	     'username'=>array(
            'required'=>true,
            'min'=>2,
            'max'=>20,
            'unique'=>'users'
         	)
   	     ));
   }
 ?>
 
 Validate.php
 <?php
    public function check($source, $items=array())
        {
          foreach($items as $item=>$rules)
          {
           foreach($rules as $rule=>$rule_value)
          {
          	$value=trim($source[$item]);
          	$item=escape($item);

          	if($rule==="required" && empty($value))
          	{
          	  $this->addError("{$item} is required");	
          	}
          	else if(!empty($value))
          	{
               switch($rule)
               {
               	 case 'min':
                 if(strlen($value)<$rule_value)
                 {
                 	$this->addError("{$item} must be a minimum of {$rule_value} characters.");
                 } 
               	 break;

               	 case 'max':
                  if(strlen($value)>$rule_value)
                 {
                 	$this->addError("{$item} must be a maximum of {$rule_value} characters.");
                 }  
               	 break;

               	 case 'matches':
                 if($value!=$source[$rule_value])
                 {
                  $this->addError("{$rule_value} must match {$item}"); 	
                 }	
               	 break;

               	 case 'unique':
                 $check=$this->_db->get($rule_value, array($item, '=', $value));
                 if($check->count())
                 { 
                   $this->addError("{$item} already exists");
                 } 
               	 break;
               } 
          	}
           }

              if(empty($this->_errors))
         {
         	$this->_passed=true;
         } 
           return $this; 
        } 
	
         }

          private function addError($error)
             {
             	$this->_errors[]=$error;
             }
        
             public function errors()
             {
             	return $this->_errors;
             }

             public function passed()
             {
             	return $this->_passed;
             }


     ?>      

