<?php
    
   require_once 'app/init.php';

   $auth=new TwitterAuth($db, $client);

   //echo $auth->getAuthUrl();
   ?>

   <?php if($auth->signedIn()): ?>
   	  <p>You are signed in. <a href="signout.php">Sign out</a></p>
   <?php else: ?>
       <p><a href="<?php echo $auth->getAuthUrl(); ?>">Sign in with Twitter</a></p>
   <?php endif; ?>	  