<?php


namespace FrankSons\UnitTesting\Contacts;

require_once '../Validator/EmailValidator.php';
use FrankSons\UnitTesting\Validator\EmailValidator;

class Contacts
{
    /**
     * @var EmailValidator
     */
    private $emailValidator;

    public function __construct(EmailValidator $emailValidator)
    {
        $this->emailValidator = $emailValidator;
    }
}