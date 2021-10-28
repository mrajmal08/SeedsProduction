<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GrowLocationParameter extends Model
{
    use HasFactory;
    protected $table = 'grow_location_parameters';
    protected $fillable = [
        'seeds',
        'flowers',
        'cut',
        'packaging',
        'plant_urc',
        'cultivation',
        'trim',
        'transfer_and_transport',
        'harvest',
        'dry',
        'label',
        'check',
        'prune',
        'grow_id',
    ];
}
