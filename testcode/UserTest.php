<?php

require _DIR_ . "/../app/Models/User.php";

class UserTest extends \PHPUnit\Framework\TestCase
{
    public function testBooleanTrueIsTrue(){

        $user = new \app\Models\User;

        $user->setFirstName('Billy');
        $this->assertEquals($user->getFirstName(),'Billy');
    }
}