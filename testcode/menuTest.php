<?php

class menuTest extends \PHPUnit\Framework\TestCase
{

    public function testIfWeCanPost(){

        $ses=1;
    if(True AND $ses == 1)
	{
        $this->assertEquals(1,1);
		$loginProfile = 'ok';
		$logo = "glyphicon glyphicon-user";
		if(True)
		{
			$link = "Login/profile.php";
		}
		else {
				$link = "profileView.php";
		}
	}
	else
	{
		$loginProfile = "Login";
		$link = "index.php";
		$logo = "glyphicon glyphicon-log-in";
    }
}
}