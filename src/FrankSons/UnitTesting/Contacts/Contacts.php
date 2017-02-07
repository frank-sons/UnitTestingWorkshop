<?php


namespace FrankSons\UnitTesting\Contacts;

use FrankSons\UnitTesting\Validator\EmailValidator;
use FrankSons\UnitTesting\Validator\ZipCodeValidator;

class Contacts
{
    /**
     * @var EmailValidator
     */
    private $emailValidator;

    /**
     * @var ZipCodeValidator
     */
    private $zipCodeValidator;

    /**
     * @var array
     */
    private $users = [];

    /**
     * Contacts constructor.
     * @param EmailValidator $emailValidator
     * @param ZipCodeValidator $zipCodeValidator
     */
    public function __construct(EmailValidator $emailValidator, ZipCodeValidator $zipCodeValidator)
    {
        $this->emailValidator = $emailValidator;
        $this->zipCodeValidator = $zipCodeValidator;
    }

    /**
     * add email for user id
     * @param int $userId
     * @param string $email
     */
    public function addEmail($userId, $email)
    {
        if ($this->emailValidator->isValid($email)) {
            $users[$userId]['email'] = $email;
        }
    }

    /**
     * add zip code for user id
     * @param int $userId
     * @param int $zipCode
     */
    public function addZipCode($userId, $zipCode)
    {
        if ($this->zipCodeValidator->isValid($zipCode)) {
            $users[$userId]['zipcode'] = $zipCode;
        }
    }

    /**
     * fetch email for given user id
     * @param int $userId
     * @return string|null
     */
    public function getUserEmail($userId)
    {
        return empty($this->users[$userId]['email']) ? null : $this->users[$userId]['email'];
    }

    /**
     * fetch zip code for given user id
     * @param int $userId
     * @return string|null
     */
    public function getUserZipCode($userId)
    {
        return empty($this->users[$userId]['zipcode']) ? null : $this->users[$userId]['zipcode'];
    }

    /**
     * get the complete user data for given user id
     * @param int $userId
     * @return array|null
     */
    public function getUserData($userId)
    {
        return empty($this->users[$userId]) ? null : $this->users[$userId];
    }

    /**
     * get all users
     * @param int $userId
     * @return array
     */
    public function getAllUsers($userId)
    {
        return $this->users;
    }
}