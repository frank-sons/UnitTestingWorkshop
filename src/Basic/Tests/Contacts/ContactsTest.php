<?php

namespace FrankSons\UnitTesting\Basic\Tests\Contacts;

require_once __DIR__ . '/../bootstrap.php';

use FrankSons\UnitTesting\Basic\Contacts\Contacts;
use FrankSons\UnitTesting\Basic\Validator\EmailValidator;
use FrankSons\UnitTesting\Basic\Validator\ZipCodeValidator;
use PHPUnit\Framework\TestCase;
use PHPUnit_Framework_MockObject_MockObject;



class ContactsTest extends TestCase
{
    /**
     * @var EmailValidator|MockObject
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
        $userId = 42;
        $email = 'frank.sons+unitTesting@code-quality.de';

        $this->emailValidatorMock->expects($this->once())
            ->method('isValid')
            ->with($email)
            ->willReturn(true);

        $contacts = new Contacts($this->emailValidatorMock, $this->zipCodeValidatorMock);

       $this->assertTrue($contacts->addEmail($userId, $email));
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
