 <?php
     //return 0 a equals to b
     //return －1 a and b dont need switch
     //return 1   a and b need switch 
     $users=[
              ['username'=>'Alex','reputation'=>50,'posts'=>200],
              ['username'=>'Dale','reputation'=>500,'posts'=>150],
              ['username'=>'Billy','reputation'=>2,'posts'=>5],
              ['username'=>'Ashley','reputation'=>1,'posts'=>6],
            ];
    // usort($users, function($first,$second)
    //        {
    //          $scoreOne=$first['reputation']+$first['posts'];
    //          $scoreTwo=$second['reputation']+$second['posts']; 
    //          if($scoreOne===$scoreTwo)
    //          {
    //             // if($first['reputation']>$second['reputation'])
    //             // {
    //             // 	return 0; //keep the same place
    //             // } else{
    //             // 	return 1;
    //             // }  
    //              return ($scoreOne>$scoreTwo)?0:1;  
    //          }
    //          return ($scoreOne>$scoreTwo)?-1:1;
    //        }   
    //      ); 
      function sortByScore($first,$second)
     {
             $scoreOne=$first['reputation']+$first['posts'];
             $scoreTwo=$second['reputation']+$second['posts']; 
             if($scoreOne===$scoreTwo)
             {
                // if($first['reputation']>$second['reputation'])
                // {
                // 	return 0; //keep the same place
                // } else{
                // 	return 1;
                // }  
                 return ($scoreOne>$scoreTwo)?0:1;  
             }
             return ($scoreOne>$scoreTwo)?-1:1;
      } 

    usort($users,'sortByScore'); 
    //uksort(array, cmp_function)  keep the key      
    var_dump($users);