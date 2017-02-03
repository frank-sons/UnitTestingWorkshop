<?php


namespace FrankSons\UnitTesting\Tests\Validator;

use FrankSons\UnitTesting\Validator\ZipCodeValidator;
use PHPUnit_Framework_TestCase;

class ZipCodeValidatorTest extends PHPUnit_Framework_TestCase
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
