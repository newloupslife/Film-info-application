<?php


final class validation
{

    static function titleValid($title)
    {
        if($title =='') {
            throw new Exception('Title of the film is empty');
        }
    }

    static function yearValid($year)
    {
        if($year == '') {
            throw new Exception('Year is empty');
        }

        if(!is_numeric($year)) {
            throw new Exception("Year is not a number");
        }

        $pattern = '/^(188[89]|189[0-9]|19[0-9]{2}|20[01][0-9]|202[0-5])$/';

        if(!preg_match($pattern,$year)) {
            throw new Exception("Invalid year, must be from 1888 to 2025");
        }

        return true;

    }

    static function formatValid($format)
    {
        if($format =='') {
            throw new Exception('Film format is empty');
        }

        if($format !== 'VHS' && $format !== 'DVD' && $format !== 'Blu-Ray') {
            throw new Exception('Invalid film format');
        }

        return true;
    }

    static function starsValid($stars)
    {
        if($stars == '') {
            throw new Exception('Stars of the film is empty');
        }

        return true;
    }
}