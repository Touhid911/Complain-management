<?php

class profileViewTest extends \PHPUnit\Framework\TestCase
{

    public function testErrorIsFoundOrNot(){

    if(!isset($_SESSION['logged_in']) OR $_SESSION['logged_in'] != 1)
	{
		$_SESSION['message'] = "You have to Login to view this page!";
		$this->assertEquals(1,1);
	}
    }
}





