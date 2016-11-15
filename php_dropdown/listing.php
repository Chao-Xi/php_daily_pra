<?php 
    require_once 'app/start.php';

    $userQuery="select dropdown_user.id, dropdown_user.username, users_profiles.first_name, users_profiles.last_name 
                from  dropdown_user left join users_profiles on dropdown_user.id=users_profiles.user_id ";
    $users=$db->query($userQuery);
  
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>DropDown</title>
</head>
<body>
        <select name="user" id="user-select">
           <option value="">Choose a user</option>
           <?php foreach ($users->fetchAll() as $user):?> 
           <option value="<?php echo $user['id']; ?>" ><?php echo $user['username']; ?></option>
           <?php endforeach;?>        
        </select>    
        <p>&nbsp;</p> 
        <div id="user-profile"></div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <script type="text/javascript" src="js/global.js"></script> 
</body>
</html>                