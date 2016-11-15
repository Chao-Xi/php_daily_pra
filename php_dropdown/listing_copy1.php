<?php 
    require_once 'app/start.php';

    $userQuery="select dropdown_user.id, dropdown_user.username, users_profiles.first_name, users_profiles.last_name 
                from  dropdown_user left join users_profiles on dropdown_user.id=users_profiles.user_id ";
    $users=$db->query($userQuery);

    if(isset($_GET['user']))
    {

    	$userQuery=" {$userQuery} where dropdown_user.id=:user_id ";
    	$user=$db->prepare($userQuery);

    	$user->execute(['user_id'=>$_GET['user']]);

    	$selectedUser=$user->fetch(PDO::FETCH_ASSOC);

    }
    
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>DropDown</title>
</head>
<body>
   <form action="listing.php" method="get">
        <select name="user">
           <option value="">Choose a user</option>
           <?php foreach ($users->fetchAll() as $user):?> 
           <option value="<?php echo $user['id']; ?>" <?php echo isset($selectedUser) && $selectedUser['id']==$user['id'] ? 'selected' :'';?> ><?php echo $user['username']; ?></option>
           <?php endforeach;?>        
        </select>   
        <input type="submit" value="show details"/>  
   </form>
   <?PHP if(isset($selectedUser)): ?>
     <pre><?php print_r($selectedUser); ?></pre>
   <?php endif;?>
</body>
</html>                