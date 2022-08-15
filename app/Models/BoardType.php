<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Board;

class BoardType extends Model
{
    use HasFactory;

    protected $fillable = [
        'type',
    ];

    public function boards()
    {
        return $this->hasMany(Board::class);
    }
}
