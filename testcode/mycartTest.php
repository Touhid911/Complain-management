<?php

class mycartTest extends \PHPUnit\Framework\TestCase
{

    public function testIfInsertedInCart(){
    //session_start();
	//require 'db.php';
    if(True)
	{
        $this->assertEquals(1,1);
		$_SESSION['message'] = "You need to first login to access this page !!!";
		//header("Location: Login/error.php");
	}
    $bid = 1234;
    if(isset($_GET['flag']))
    {
        $pid = $_GET['pid'];

        $sql = "INSERT INTO mycart (bid,pid)
               VALUES ('$bid', '$pid')";
        $result = mysqli_query($conn, $sql);
    }


    }
}