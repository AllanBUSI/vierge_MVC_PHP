<?php

class Utils {
    public static function Verif($value, $min, $max) {
        if (strlen($value) >= $min && strlen($value) <= $max) {
            return false;
        }
        return true;
    }

    public static function HeaderError($page, $error) {
        $env = Autoloader::loadenv();

        return header('Location: '.$env['URL'].$page.'?error='.$error);
    }
}