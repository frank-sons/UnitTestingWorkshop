<?php


namespace FrankSons\UnitTesting\Validator;


class ZipCodeValidator
{
    /**
     * check if zip code is valid
     * @param int $zipCode
     * @return bool
     */
    public function isValid($zipCode)
    {
        if (preg_match('/^[1-9]\d{4}$/', $zipCode)) {
            return true;
        } else {
            return false;
        }
    }
}