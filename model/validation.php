<?php

/* validation.php
 * Validate data for the dating app
 *
 */
class Validator
{
    //Name must be alphabetic
    static function validName($name)
    {
        return ctype_alpha($name);
    }

    //age must be between 18 and 118
    static function validAge($age)
    {
        return $age >= 18 && $age <= 118;
    }

    //Up to me what a valid phone number is
    static function validNumber($number)
    {
        return is_numeric($number);
    }

    //Validates email
    static function validEmail($email)
    {
        return (!preg_match("/^([a-z0-9\+_\-]+)(\.[a-z0-9\+_\-]+)*@([a-z0-9\-]+\.)+[a-z]{2,6}$/ix", $email))
            ? FALSE : TRUE;
    }

    static function validOutdoor()
    {
        return false;
    }

    static function validIndoor()
    {
        return false;
    }

}