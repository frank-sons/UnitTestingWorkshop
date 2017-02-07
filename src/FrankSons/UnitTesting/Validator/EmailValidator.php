<?php


namespace FrankSons\UnitTesting\Validator;


class EmailValidator implements ValidatorInterface
{
    /**
     * check if email is valid
     * @param string $email
     * @return bool
     */
    public function isValid($email)
    {
        if (filter_var($email, FILTER_VALIDATE_EMAIL) === $email) {
            return true;
        } else {
            return false;
        }
    }

}