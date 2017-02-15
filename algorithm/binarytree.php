<?php
   class Node
   {
     public $value;
     public $left;
     public $right;
   }
    //root->left->right
    function preorder($root)
    {
      $stack=array();
      array_push($stack, $root);
      while(!empty($stack))
      {
      	$center_node=array_pop($stack);
      	echo $center_node->value.' ';

      	if($center_node->right!=null) array_push($stack, $center_node->right);
      	if($center_node->left!=null) array_push($stack, $center_node->left);
      	//array_pop()
      	//1st in last out
      	//so push right first then push left
      }	
    }
    // A
    // B C
    // (B) D
    // (D)
    // (C) E F
    // (E) 
    // (F) 

    //left->root->right
    function inorder($root)
    {
      $stack = array();
      $center_node = $root;
      while(!empty($stack) || $center_node!=null)
      {
      	while($center_node!=null)
      	{
      		array_push($stack, $center_node);
      		$center_node=$center_node->left;
      	}
      	  $center_node=array_pop($stack);
      	  echo $center_node->value." ";

      	  $center_node = $center_node->right;	
      }
    }
    
    // A
    // B 
    // D
    // POP() D B A  
    // A C E 
    // POP E C 
    // F  

    //left right root
     function postorder($root)
     {
        $pushstack = array();
        $visitstack = array();
        array_push($pushstack, $root);

        while (!empty($pushstack)) {
            $center_node = array_pop($pushstack);
            array_push($visitstack, $center_node);
            if ($center_node->left != null) array_push($pushstack, $center_node->left);
            if ($center_node->right != null) array_push($pushstack, $center_node->right);
        }
 
        while (!empty($visitstack)) {
            $center_node = array_pop($visitstack);
            echo $center_node->value. " ";
        }
     }

   $a = new Node();
   $b = new Node();
   $c = new Node();
   $d = new Node();
   $e = new Node();
   $f = new Node();
   $a->value = 'A';
   $b->value = 'B';
   $c->value = 'C';
   $d->value = 'D';
   $e->value = 'E';
   $f->value = 'F';
   $a->left = $b;
   $a->right = $c;
   $b->left = $d;
   $c->left = $e;
   $c->right = $f;

   preorder($a);  //A B D C E F
   echo "<br/>";
   inorder($a);   //D B A E C F 
   echo "<br/>";
   postorder($a); //D B E F C A 
   echo "<br/>"; 

   //http://www.phpddt.com/php/binary-tree-traverse.html
 ?>