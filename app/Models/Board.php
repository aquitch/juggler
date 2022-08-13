<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Device;
use App\Models\Order;
use App\Models\User;
use App\Models\BoardType;

class Board extends Model
{
    use HasFactory;

    protected $connection = 'mysql';

    protected $fillable = [
        'sch_eng',
        'pcb_eng',
        'name',
        'board_type_id',
    ];

    public function devices()
    {        
        return $this->morphToMany(Device::class, 'devicable', 'astra.devicables');
    }

    public function schEng()
    {
        return $this->belongsTo(User::class, 'sch_eng');
    }

    public function pcbEng()
    {
        return $this->belongsTo(User::class, 'pcb_eng');
    }

    public function type()
    {
        return $this->belongsTo(BoardType::class, 'board_type_id');
    }
}
