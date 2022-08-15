<?php

namespace App\Services;

use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Board;
use App\Models\BoardType;

class UniqueNameService
{
    public static function getUniqueName(Request $request)
    {
        $type = BoardType::find($request->board_type_id)->loadCount('boards');

        return $type->type . ($type->boards_count + 1);
    }

    public static function updateUniqueName(Request $request, Board $board)
    {
        if ($board->type->id == $request->board_type_id) {
            return $board->name;
        } else {
            self::getUniqueName($request);
        }
    }
}