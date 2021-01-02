<?php


class dbTest extends \PHPUnit\Framework\TestCase
{

    public function testDbIsConnecting(){

    $serverName = "localhost";
    $userName = "root";
    $password = "";
    $dbName = "agroculture";

    $conn = mysqli_connect($serverName, $userName, $password, $dbName);
    if (!$conn)
    {
        die("Connection failed: " . mysqli_connect_error());
    }
    if($conn)
    {
        $this->assertEquals(1,1);
    }    
    }
}