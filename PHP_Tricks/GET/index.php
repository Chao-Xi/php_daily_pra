<?php
  
  // if(isset($_GET['search']) && isset($_GET['page']))
  // {
    
  //   $page=$_GET['page'];
  //   $serachTerm=$_GET['search'];

  //   echo '<h3>Searching for:'.$serachTerm.'</h3>';
  //   echo '<p>You are on page: '.$page.'</p>'; 

  //   $pages=10;

  //   for($i=1; $i<=$pages; $i++)
  //  {
  // 	echo '<a href="?search='. $serachTerm. '&page='.$i.'">'. $i .'</a> ' ;
  //  }	

  // }
  // else
  // {
  //   echo "pls input '?search=learn%20php&page=1'";
  // }  
    
    $page=isset($_GET['page']) ? $_GET['page'] : 1;
    //php 7.0 $page=isset($_GET['page']) ?? 1
    
    $serachTerm=isset($_GET['search']) ? $_GET['search'] : 'learnPHP';

    // $page=$_GET['page'];
    // $serachTerm=$_GET['search'];

    echo '<h3>Searching for:'.$serachTerm.'</h3>';
    echo '<p>You are on page: '.$page.'</p>'; 

    $pages=10;

    for($i=1; $i<=$pages; $i++)
   {
  	echo '<a href="?search='. $serachTerm. '&page='.$i.'">'. $i .'</a> ' ;
   }	
  
   //search=learn%20php&page=10