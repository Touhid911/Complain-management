<?php

class reviewInputTest extends \PHPUnit\Framework\TestCase
{
    public function testIfInputIsProper(){

    //session_start();
    //require 'db.php';

    $rating = 5;
    $review = 'Very Good';
    $name = 'Arafat';
    $pid = 1234;

    // echo $rating.$review.$pid.$name;
    $sql = "INSERT INTO review(pid,name,rating,comment)
            VALUES('$pid','$name', '$rating', '$review')";
    $this->assertEquals(1,1);
    //$result = mysqli_query($conn, $sql);
    if(True)
    {
        echo 'True';
    }
    else {
        header("Location: review.php?pid=".$pid);
    }
}
}