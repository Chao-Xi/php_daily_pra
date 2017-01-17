1.Namespace
 1)Why we need namespace
    different objects have same Class name
    
    namespace Article;
    class Comment { }
    
    namespace MessageBoard;
    class Comment {}

    //call the current space(MessageBoard) class Comment
    $comment = new Comment();
    
    //In the MessageBoard Space call the Article space class Article
    $article_comment = new \Article\Comment(); 


  2) <?php
     namespace Blog\Article;
     class Comment { }

     namespace BBS;
     Class Comment { }
     Class Comt { }

     //Import a class
     use log\Article\Comment;
     $article_comment = new Comment();
     //Because the imported class has same name as current class, so generate a fatal error

     //Solve this error, we need rename the import class
     use Blog\Article\Comment as Comet;
      $article_comment = new Comet();


     3)dynamic namespace
       __NAMESPACE__
       namespace

2.  sprintf
    <?php
    $number = 2;
    $str = "Shanghai";
    txt = sprintf("There are %u million cars in %s.",$number,$str);
    echo $txt;
    There are 2 million cars in Shanghai.  

    S%->string   u% d%->number



3.  curlRequest 
     carry this URL inside the function
     public function curlRequest($url)
     {
        $curl=curl_init();
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_URL, $url);
        return curl_exec($curl);
     }     





 