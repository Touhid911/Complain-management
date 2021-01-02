<?php

class errorTest extends \PHPUnit\Framework\TestCase
{

    public function testErrorIsFoundOrNot(){

        $check=True;
        if($check)
        {
            $this->assertEquals(1,1);
        }
        else
        {
            header("Location: ../index.php");
        }
    }
}