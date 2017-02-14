<?php

namespace Tylercd100\Validator\Phone\Tests;

use Validator;
use Tylercd100\Validator\Phone\Validator as PhoneValidator;

class ValidatorTest extends TestCase
{
    public function testItCreatesAnInstanceOfPhoneValidator()
    {
        $obj = new PhoneValidator();
        $this->assertInstanceOf(PhoneValidator::class, $obj);
    }

    protected function validate($color, $rule = 'phone'){
        return !(Validator::make(['test' => $color], ['test' => $rule])->fails());
    }

    // public function testValidatorPhone()
    // {
    //     $this->assertEquals(true, $this->validate('+15556667777', 'phone'));
    // }

    public function testValidatorPhoneE164()
    {
        $this->assertEquals(true, $this->validate('+15556667777', 'phone:E164'));
        $this->assertEquals(false, $this->validate('5556667777', 'phone:E164'));
    }
}
