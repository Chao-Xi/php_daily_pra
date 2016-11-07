<?php  
   require_once 'app/init.php';
   if(isset($_GET['as'], $_GET['item']))
   {
       $as=$_GET['as'];
       $item=$_GET['item'];

       switch($as)
       {
          case 'done':
          $doneQuery=$db->prepare("update items set done=1 where id=:item and user=:user");

          $doneQuery->execute(['item'=>$item,
                               'user'=>$_SESSION['user_id'] 
          	                   ]);
          break;
       }
   }
   header("Location: index.php");
