<?php

namespace Faker\Provider\en_LK;

class PhoneNumber extends \Faker\Provider\PhoneNumber
{
    protected static $formats = array(
        '+94 0## ######'
    );

    /**
     * An array of en_LK mobile (cell) phone number formats
     * @var array
     */
    protected static $mobileFormats = array(
        '+94 07########',
        '07########',
    );

    /**
     * Return a en_LK mobile phone number
     * @return string
     */
    public static function mobileNumber()
    {
        return static::numerify(static::randomElement(static::$mobileFormats));
    }
}
