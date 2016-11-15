<?php
    require_once '../app/start.php';
    if(isset($_GET['user']))
    {

    	$userQuery=" select dropdown_user.id, dropdown_user.username, users_profiles.first_name, users_profiles.last_name 
                from  dropdown_user left join users_profiles on dropdown_user.id=users_profiles.user_id where dropdown_user.id=:user_id ";
    	$user=$db->prepare($userQuery);

    	$user->execute(['user_id'=>$_GET['user']]);

    	$selectedUser=$user->fetch(PDO::FETCH_ASSOC);

    	print_r($selectedUser);

    }
 ?>   
