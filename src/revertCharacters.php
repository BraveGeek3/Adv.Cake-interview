<?php

declare(strict_types=1);

namespace App\RevertCharacters;

function revertCharacters(string $str): string
{
    if ($str === '') {
        return '';
    }

    $result = '';
    for ($i = mb_strlen($str); $i >= 0; $i--) {
        $result .= mb_substr($str, $i, 1);
    }
    return $result;
}