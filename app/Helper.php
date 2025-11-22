<?php

namespace App\Helper;

class Helper {
public static function dd($stmt): void
{
    echo "<pre>";
    var_dump($stmt);
    echo "</pre>";
    die();
}

}
