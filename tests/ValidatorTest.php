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

    protected function validate($number, $rule = 'phone')
    {
        return !(Validator::make(['attr' => $number], ['attr' => $rule])->fails());
    }

    public function testValidatorPhone()
    {
        $this->assertEquals(true, $this->validate('+15556667777', 'phone'));
    }

    public function testValidatorPhoneE164()
    {
        $this->assertEquals(true, $this->validate('+15556660000', 'phone:E164'));
        $this->assertEquals(false, $this->validate('+1555 ex 1234', 'phone:E164'));
        $this->assertEquals(false, $this->validate('+155566677775556667777', 'phone:E164'));
        $this->assertEquals(false, $this->validate('+1555', 'phone:E164'));
        $this->assertEquals(false, $this->validate('5556667777', 'phone:E164'));
        $this->assertEquals(false, $this->validate('+1(555)666-7777', 'phone:E164'));
    }

    public function testValidatorErrorMessage()
    {
        $validator = Validator::make(['attr' => '+1555 ex 1234'], ['attr' => 'phone:E164']);
        $this->assertEquals("Not a valid phone number", $validator->errors()->first());
    }
}
