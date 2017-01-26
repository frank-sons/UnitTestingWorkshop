<?php


namespace FrankSons\UnitTesting\Tests\Validator;

require_once '../../Validator/ZipCodeValidator.php';
use FrankSons\UnitTesting\Validator\ZipCodeValidator;

class ZipCodeValidatorTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @var ZipCodeValidator
     */
    private $validator;

    protected function setUp()
    {
        $this->validator = new ZipCodeValidator();
    }

    public function testValidationWithValidZipCode()
    {
        $zipcode = '12345';
        $this->assertTrue($this->validator->isValid($zipcode));
    }
}
