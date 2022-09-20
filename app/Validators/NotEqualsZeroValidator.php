<?php


namespace App\Validators;


class NotEqualsZeroValidator
{
    public function validate($attribute, $value, $parameters, $validator)
    {
        return $value !== 0 && $value !== '0';
    }
}