<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Board;
use App\Models\Order;
use App\Models\User;

class Device extends Model
{
    use HasFactory;

    protected $connection = 'Altium';

    protected $fillable = [
        'partnumber',
        'manufacturer',
        'sch_lib',
        'sch_ref',
        'pcb_lib',
        'pcb_ref',
        'datasheet',
        'created_by',
        'updated_by',
    ];

    public function board()
    {        
        return $this->morphedByMany(Board::class, 'devicable');
    }

    public function orders()
    {
        return $this->morphedByMany(Order::class, 'devicable');
    }

    public function users()
    {
        return $this->morphedByMany(User::class, 'devicable');
    }
}
