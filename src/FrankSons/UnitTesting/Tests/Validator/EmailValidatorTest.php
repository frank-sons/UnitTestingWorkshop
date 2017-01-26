<?php


namespace FrankSons\UnitTesting\Tests\Validator;

require_once '../../Validator/EmailValidator.php';
use FrankSons\UnitTesting\Validator\EmailValidator;

class EmailValidatorTest extends \PHPUnit_Framework_TestCase
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
