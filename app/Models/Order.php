<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Board;

class Order extends Model
{
    use HasFactory;

    public $fillable = [
        'name',
    ];

    public function devices()
    {
        return $this->morphToMany(Device::class, 'devicable', 'astra.devicables');
    }
}
