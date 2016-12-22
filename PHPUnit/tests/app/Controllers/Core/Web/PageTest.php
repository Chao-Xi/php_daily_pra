<?php
    class PageTest extends PHPUnit_FrameWork_TestCase
    {
    	public function testRenderReturnHelloWorld()
    	{
    	  $pages=new \Controllers\Core\Web\Pages();
    	  
    	  $expected="Hello World";

    	  $this->assertEquals($expected, $pages->render());	
    	}

    	public function testReturnTrue()
    	{
    		$pages=new \Controllers\Core\Web\Pages();
    		$this->assertTrue($pages->returnTrue());
    	}

    	public function testReturnArrayValidArray()
    	{
    		$pages=new \Controllers\Core\Web\Pages();
    		$this->assertTrue(is_array($pages->returnArray()));
    	}

    	public function testReturnArrayNoEmptyArray()
    	{
    		$pages=new \Controllers\Core\Web\Pages();
    		$this->assertTrue(count($pages->returnArray())>0);
    	}
    }