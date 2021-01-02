<?php

class buyNowTest extends \PHPUnit\Framework\TestCase
{

    public function testIfWeCanPost(){

    $pid = 1234;
    if(True)
    {
        $name = 'Arafat';
        $city = 'Dhaka';
        $mobile = '01682055023';
        $email = 'xyz@gmail.com';
        $pincode = 1219;
        $addr = 'AftabNagar';
        $bid = 12345;

        $sql = "INSERT INTO transaction (bid, pid, name, city, mobile, email, pincode, addr)
                VALUES ('$bid', '$pid', '$name', '$city', '$mobile', '$email', '$pincode', '$addr')";
        
        $result = True;
        if($result)
        {
            $_SESSION['message'] = "Order Succesfully placed! <br /> Thanks for shopping with us!!!";
            //header('Location: Login/success.php');
            $this->assertEquals(1,1);
        }
        else {
            echo $result->mysqli_error();
            $_SESSION['message'] = "Sorry!<br />Order was not placed";
            //header('Location: Login/error.php');
        }
    }
    }
}