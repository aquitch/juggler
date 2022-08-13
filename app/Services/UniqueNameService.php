<?php

namespace App\Services;

use Illuminate\Support\Str;
use App\Models\Board;
use App\Models\BoardType;

class UniqueNameService
{
    public static function getUniqueName($type)
    {
        $type = BoardType::find($type)->loadCount('boards');

        //dd($type);

        return $type->type . ($type->boards_count + 1);
    }
}