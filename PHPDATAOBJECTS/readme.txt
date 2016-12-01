PHP DATA Object
1.Connecting
  try{
       $handler=new PDO('mysql:host=127.0.0.1;dbname=cms1','root','901014');
       $handler->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      }
    catch(PDOException $e)
    {
      echo $e->getMessage();
      die();
    }  

   1). setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION)
   2). PDOException

2.FETCH
  fetch();
  fetch(PDO::FETCH_OBJ)    =>Object result
  fetch(PDO::FETCH_BOTH)   =>num and assoc both as index
  fetch(PDO::FETCH_NUM)    =>only num as index
  fetch(PDO::FETCH_ASSOC)  =>only assoc as index

 3.FETCH TO CLASS
  $pageQuery->setFetchMode(PDO::FETCH_CLASS, "PageinfoEntry");

 4. Prepare
    $sql="insert into user (email, password ,username, active) values (?, ?, ?, ?)";

    $query=$handler->prepare($sql);

    $query->execute(array($email, $password, $username, $active));

  5.lastInsertId();
     
    $handler->lastInsertId();

    It's in the handler level, not query level

   6.rowCount();   



