<?php
namespace App;

class Account {
    public $id, $name, $surname, $personalID, $accountNumber, $amount;

    public static function accountGenerator()
    {
        $string1 = '';
        for ($i = 0; $i < 2; $i++) {
            $string1 .= rand(0, 9);
        }
        $string2 = '';
        for ($i = 0; $i < 3; $i++) {
            $string2 .= rand(0, 9);
        }
        $string3 = '';
        for ($i = 0; $i < 4; $i++) {
            $string3 .= rand(0, 9);
        }
        $string4 = '';
        for ($i = 0; $i < 4; $i++) {
            $string4 .= rand(0, 9);
        }
        return 'LT' . $string1 . ' ' . '7044 0' . $string2 . ' ' . $string3 . ' ' . $string4;
    }
}