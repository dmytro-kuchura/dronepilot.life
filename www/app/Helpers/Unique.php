<?php


namespace App\Helpers;


class Unique
{
    public static function checkAlias($string, $database)
    {
        return Text::cyrillic($string);
    }
}
