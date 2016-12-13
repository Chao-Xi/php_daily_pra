1.$start=($page>1) ? ($page * $perPage)-$perPage:0;
  Start Page
2.SQL_CALC_FOUND_ROWS 
  (select FOUND_ROWS() as total)
  No need to select second time
  As you can see, using the SQL_CALC_FOUND_ROWS keyword allows you to save the amount of results before applying the LIMIT clause; and this amount can be retrieved with a simple "SELECT FOUND_ROWS()" after the query is executed.  
3.<?php for(): ?>
  <?php endfor;?>
4.data sentences comes from Faker/index2.php   
