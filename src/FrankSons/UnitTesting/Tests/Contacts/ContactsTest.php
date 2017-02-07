<?php


namespace Contacts;


use FrankSons\UnitTesting\Contacts\Contacts;
use FrankSons\UnitTesting\Validator\EmailValidator;
use FrankSons\UnitTesting\Validator\ZipCodeValidator;
use PHPUnit_Framework_MockObject_MockObject;
use PHPUnit_Framework_TestCase;


class ContactsTest extends PHPUnit_Framework_TestCase
{
    /**
     * @var EmailValidator|PHPUnit_Framework_MockObject_MockObject
     */
    private $emailValidatorMock;

    /**
     * @var ZipCodeValidator|PHPUnit_Framework_MockObject_MockObject
     */
    private $zipCodeValidatorMock;

    /**
     * set up mocks
     */
    protected function setUp()
    {
        $this->emailValidatorMock = $this->getMockBuilder(EmailValidator::class)
            ->disableOriginalConstructor()
            ->getMock();

        $this->zipCodeValidatorMock = $this->getMockBuilder(ZipCodeValidator::class)
            ->disableOriginalConstructor()
            ->getMock();
    }

    /**
     * test adding a valid email
     */
    public function testAddingValidEmail()
    {
        $this->markTestIncomplete('not yet implemented');
    }

    /**
     * test adding an invalid email
     */
    public function testAddingInvalidEmail()
    {
        $this->markTestIncomplete('not yet implemented');
    }

    /**
     * test adding a valid zipcode
     */
    public function testAddingValidZipCode()
    {
        $this->markTestIncomplete('not yet implemented');
    }

    /**
     * test adding an invalid zipcode
     */
    public function testAddingInvalidZipCode()
    {
        $this->markTestIncomplete('not yet implemented');
    }

    /**
     * test retrieving an existing user email
     */
    public function testGetExistingUserEmail()
    {
        $this->markTestIncomplete('not yet implemented');
    }

    /**
     * test retrieving a non existing user email
     */
    public function testGetNonExistingUserEmail()
    {
        $this->markTestIncomplete('not yet implemented');
    }

    /**
     * test retrieving an existing user zipcode
     */
    public function testGetExistingUserZipCode()
    {
        $this->markTestIncomplete('not yet implemented');
    }

    /**
     * test retrieving a non existing user zipcode
     */
    public function testGetNonExistingUserZipCode()
    {
        $this->markTestIncomplete('not yet implemented');
    }

    /**
     * test getting existing user data
     */
    public function testGetExistingUserData()
    {
        $this->markTestIncomplete('not yet implemented');
    }

    /**
     * test getting non existing user data
     */
    public function testGetNonExistingUserData()
    {
        $this->markTestIncomplete('not yet implemented');
    }

    /**
     * test getting all existing user data
     */
    public function testGetAllExistingUserData()
    {
        $this->markTestIncomplete('not yet implemented');
    }

    /**
     * test getting empty existing user data
     */
    public function testGetEmptyExistingUserData()
    {
        $this->markTestIncomplete('not yet implemented');
    }
}
