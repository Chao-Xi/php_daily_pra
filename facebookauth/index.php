<?php
   require_once 'app/init.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>Facebook Signe In</title>
</head>
<body>
  <h1>Sign in with facebook</h1>
  <?php if(!isset($_SESSION['facebook'])): ?>
   <a href="<?php echo $facebook->getLoginUrl(); ?>">Sign in with Facebook</a>
  <?php else: ?>
  	<p>You are signed in.<?php echo $user['name']; ?>. <a href="signout.php">Sign out</a></p>
  <?php endif;?>	
</body>
</html>   
