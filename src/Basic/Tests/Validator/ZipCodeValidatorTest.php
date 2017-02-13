<?php

namespace FrankSons\UnitTesting\Basic\Tests\Validator;

require_once __DIR__ . '/../bootstrap.php';

use FrankSons\UnitTesting\Basic\Validator\ZipCodeValidator;
use PHPUnit\Framework\TestCase;
use PHPUnit_Framework_TestCase;

class ZipCodeValidatorTest extends TestCase
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
