<?php
    function treeOut($tree)
    {
       $markup='';
       foreach($tree as $branch=>$twig)
       {
       	  $markup.='<li>'.(is_array($twig) ? $branch.treeOut($twig) : $twig).'</li>';
       }
       return '<ul>'.$markup.'</ul>';	
    }
    //1. is_array()
    //2. call the function itself
 ?>   