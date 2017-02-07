<?php


namespace FrankSons\UnitTesting\Basic\Validator;


interface ValidatorInterface
{
    /**
     * @param mixed $data
     * @return bool
     */
    public function isValid($data);
}