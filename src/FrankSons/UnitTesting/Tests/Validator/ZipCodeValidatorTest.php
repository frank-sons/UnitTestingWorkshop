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
        $this->markTestIncomplete('not yet implemented');
    }

    public function testValidationWithInvalidZipCode()
    {
        $this->markTestIncomplete('not yet implemented');
    }
}
