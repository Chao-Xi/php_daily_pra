<?php
    require_once 'app/init.php';
    if(!isset($_GET['poll']))
    {
      header('Location: index.php');
    }else {
    	 $id=intval($_GET['poll']);
          //print_r($id);
    	 //get the genearl poll information
    	 $pollQuery=$db->prepare("select id, questions from polls where id=:poll and Date(now()) between starts and ends");
    	 $pollQuery->execute([
    	 	                 'poll' =>$id
    	 	                ]);
    	 $polls=$pollQuery->fetchObject();
    	 //print_r($polls);
         
         //get the user answer for this poll
          $answerQuery=$db->prepare("select polls_choices.id as choice_id, polls_choices.name as choice_name from polls_answers join polls_choices on polls_answers.choice=polls_choices.id
              where polls_answers.user=:user and polls_answers.poll=:poll 
          	  ");
          $answerQuery->execute([
                                   'user'=>$_SESSION['user_id'],
                                   'poll'=>$id     
          	                    ]);
         // $res=$answerQuery->fetchObject();
         // print_r($res);
         //Has the user completed the poll?

          $completed=$answerQuery->rowCount()?true:false;
         //Get poll choices
          if($completed){
             $answerQuery2=$db->prepare("select polls_choices.name, count(polls_answers.id)*100/(select count(*) from polls_answers where polls_answers.poll=:poll)
                 as percentage from polls_choices
                 left join polls_answers on polls_choices.id=polls_answers.choice 
                 where polls_choices.poll=:poll group by polls_choices.id  
             	"); 
            $answerQuery2->execute(['poll'=>$id]);
            //Extract answers
            while($row=$answerQuery2->fetchObject()) {
            	$answers[]=$row;
            } 
          }
          else{
         $choicesQuery=$db->prepare("select polls.id, polls_choices.id as choice_id, polls_choices.name from polls join polls_choices on polls.id=polls_choices.poll where polls.id=:poll and Date(now()) between polls.starts and polls.ends"); 
         $choicesQuery->execute([
    	 	                 'poll' =>$id
    	 	                ]);  

         //$choices=$choicesQuery->fetchObject();

         while($row=$choicesQuery->fetchObject())
         {
         	$choices[]=$row;
         }
         }
          //print_r($choices);
   
    }  	

?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
	<title>Poll</title>
	<link rel="stylesheet" href="css/main.css"/>
</head>
<body>
     <?php if(!$polls):?>
     	<p>That polls doesn't exist</p>
     <?php else: ?>	
     <div class="poll">
       <div class="poll-question">
        <?php echo $polls->questions;?>
       </div>

       <?php if($completed): ?>
        You have completed the poll, thanks!
        <ul>
        	<?php foreach($answers as $answer): ?>
             <li><?php echo $answer->name;?>(<?php echo number_format($answer->percentage,2); ?>)</li>
        	<?php endforeach;?>	
        </ul>
       <?php else:?>
       <?php if(!empty($choices)):?>
       <form action="vote.php" method="POST">
         <div class="poll-options">
             <?php foreach($choices as $index=>$choice): ?>
             <div class="poll-option">
             <input type="radio" name="choice" value="<?php echo $index; ?>" id="c<?php echo $index; ?>">
             <label for="c<?php echo $index; ?>"><?php echo $choice->name ?></label>
            </div>
            <?php endforeach; ?>
         </div>
        <?php else: ?>
         <p>There is no choices for this question</p>
        <?php endif;?> 	
         <input type="submit" value="submit answer">
         <input type="hidden" name="poll" value="<?php echo $id; ?>">
       </form>
     </div>
 <?php endif;?>
 <?php endif;?>
</body>
</html>