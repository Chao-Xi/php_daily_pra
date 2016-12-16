<?php
     require_once 'classes/ErrorHandler.php';
     require_once 'classes/Validator.php';
     require_once 'classes/Database.php';

     $errorHandler=new ErrorHandler;
     $db=new Database;
     // $errorHandler->addError('Oops, that is not valid!','username');
     // if($errorHandler->hasErrors())
     // {
     // 	//echo $errorHandler->first('username');
     // 	print_r($errorHandler->all());
     // }	
     //var_dump($db->table('users')->exists(['username'=>'Kloss']));

     if(!empty($_POST))
     {
     	$validator=new Validator($db, $errorHandler);

     	$validation=$validator->check($_POST,[
                     'username'=>[
                                  'required'=>true,
                                  'maxlength'=>20,
                                  'minlength'=>3, 
                                  'alnum'=>true,
                                  'unique'=>'users'
                                ] ,
                     'email'=>[
                                'required'=>true,
                                'maxlength'=>255,
                                'email'=>true,
                                'unique'=>'users'
                              ],
                     'password'=>[
                                'required'=>true,
                                'minlength'=>6
                              ],
               
                 'password_again'=>[
                                  'match'=>'password'   
                                 ]                            
     		        ]);
     	if($validator->fails())
        {
        	echo '<pre>',print_r($validation->errors()->all()),'</pre>';
        }		
     }
     	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Validation</title>
</head>
<body>
   <form action="index.php" method="post" autocomplete="off">
   	<div>
   	Username:<input type="text" name="username">
    
    <div>
   	Email:<input type="text" name="email" >
   	</div>
    
    <div>
   	Password:<input type="password" name="password">
   	</div>
    
    <div>
   	Re-password:<input type="password" name="password_again">
   	</div>

   	<div>
   	<input type="submit" value="submit"/>	
   	</div>
   </form>
</body>
</html>     	