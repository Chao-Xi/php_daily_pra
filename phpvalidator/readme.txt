1.index.php
  
  autocomplete="off"

  if(!empty($_POST))
  //Give a check of $_POST directly

  $validator=new Validator($db, $errorHandler)
  //Class Dependency as class Validator's  constructor required
 
 [
   'username'=>[
        'required'=>true,
        'maxlength'=>20,
        'minlength'=>3, 
        'alnum'=>true,
      'unique'=>'users'
           ] ,
 ]
 //Two dimension array

$validation->errors()->all()
//method chaining
//The errors() function need (return $this)

2.Validator.php
  
  public function __construct(Database $db, ErrorHandler $errorHandler)
 //class dependency
 
 public function check($items, $rules)
 //$_POST=>$item

 in_array(search,array,type) check the search in array or not

 array_keys($array) return a array contains all keys 

 call_user_func_array  

 mixed call_user_func_array ( callable $callback , array $param_arr )

DEMO:
 <?php
function a($b, $c)
{
echo $b;
echo $c;
}
call_user_func_array('a', array("111", "222"));
//show 111 222
?>

<?php
Class ClassA
{
function bc($b, $c) {
$bc = $b + $c;
echo $bc;
}
}
call_user_func_array(array('ClassA','bc'), array("111", "222"));
//SHOW 333
?>

Why: unknown numbers of paramters
     callback function

filter_var($value,FILTER_VALIDATE_EMAIL)
check email

mb_strlen($var) //give the length of string better than strlen() in UTF-8 like chinese

ctype_alnum($value) 
Checks if all of the characters in the provided string, text, are alphanumeric.
check the variables is number or words

$this->pdo=new PDO("mysql:host={$this->host}; dbname={$this->db}", $this->username, $this->password);


PDO: rowCount()












