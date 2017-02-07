<?php

namespace FrankSons\UnitTesting\Basic\Tests\Validator;

require_once __DIR__ . '/../bootstrap.php';

use FrankSons\UnitTesting\Basic\Validator\EmailValidator;
use PHPUnit_Framework_TestCase;

class EmailValidatorTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var EmailValidator
     */
    private $emailValidator;

    protected function setUp()
    {
        $this->emailValidator = new EmailValidator();
    }

    public function testValidationWithValidSimpleEmail()
    {
        $email = 'test@test.de';

        $this->assertTrue($this->emailValidator->isValid($email));
    }

    public function testValidationWithValidAdvancedEmail()
    {
        $email = 'test.test+label@test.de';

        $this->assertTrue($this->emailValidator->isValid($email));
    }

    public function testValidationWithInvalidEmail()
    {
        $email = 'my email@test.de';

        $this->assertFalse($this->emailValidator->isValid($email));
    }
}
