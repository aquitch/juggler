<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

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
}
