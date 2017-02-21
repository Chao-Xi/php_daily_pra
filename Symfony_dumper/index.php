<?php
    require "vendor/autoload.php";

    //namespace=>use
    use Symfony\Component\VarDumper\VarDumper;
    use Symfony\Component\VarDumper\Cloner\VarCloner;
    use Symfony\Component\VarDumper\Dumper\HtmlDumper;
    use Symfony\Component\VarDumper\Dumper\CliDumper;
    //htmldumper shows on web page
    //CliDumper shows on client console line, CMD
    
    VarDumper::setHandler(function($var){
        //this will overwrite the dump() below
        $cloner=new VarCloner;
        $htmlDumper=new HtmlDumper; 
        //$htmlDumper->setStyle([]); set the color or bgc etc.
        $dumper=PHP_SAPI==='cli' ? new CliDumper : $htmlDumper;
        //since CliDumper and HtmlDumper are both static function
        //so can call the classname directly
        //PHP_SAPI:Core Predefined Constants
        //php_sapi_name() — Returns the type of interface between web server and PHP
        $dumper->dump($cloner->cloneVar($var));

    });

    class User{

    	public $username="Kevin";
    	public $a=['1','2','3'];

    }

    $user=new User;
    dump($user);

