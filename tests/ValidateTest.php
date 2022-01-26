<?php

use PHPUnit\Framework\TestCase;
use App\Validate;

class ValidateTest extends TestCase{

    public function test_email(){
        $email = Validate::email('dm@radiodoki.com');
        $this->assertTrue($email);
    }

    public function test_url(){
        $url = Validate::url('https://platzi.com');
        $this->assertTrue($url);
    }
}