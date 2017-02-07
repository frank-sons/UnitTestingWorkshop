<?php


namespace FrankSons\UnitTesting\Validator;


interface ValidatorInterface
{
    /**
     * @param mixed $data
     * @return bool
     */
    public function isValid($data);
}