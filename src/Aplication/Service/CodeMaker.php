<?php
declare(strict_types=1);

namespace App\Aplication\Service;

class CodeMaker
{
    public static function make(){
        return rand(1111, 9999);
    }
}