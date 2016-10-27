<?php
    $start=new DateTime;
    $start->setTime(8, 0, 0);

    $end=clone $start;
    $end->setTime(18, 0, 0);

    $interval=new DateInterval('PT1H');
    $dateRange=new DatePeriod($start,$interval,$end);

    var_dump($dateRange);
    echo "<br/>";
    ?>

    <!DOCTYPE html>
    <html>
    <head>
    	<title>Time Periods</title>
    </head>
    <body>
     <select name="time" id="time">
      <?php foreach($dateRange as $date):?>
          <option value="<?php echo $date->format('H:i:s');?>"><?php echo $date->format('H:i:s');?></option>
      <?php endforeach;?>	
     </select>
    </body>
    </html> 

