<?php

namespace Tests\TestCode;

class dataFilter
{
    public $user_name;
    public function dataFilter($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
}