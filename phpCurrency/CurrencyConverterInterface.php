<?php
     // Why we need name space
     // namespace Article;
     // class Comment { }

     // namespace MessageBoard;
     // class Comment { }
     // //call the current space class MessageBoard 
     // $comment = new Comment();
     // //Call the article space class Article
     // $article_comment = new \Article\Comment();


     namespace Practice\Utilities;

     interface CurrencyConverterInterface
     {
     	public function convert(array $conversions);
     	public function getCurrencies();
     } 

