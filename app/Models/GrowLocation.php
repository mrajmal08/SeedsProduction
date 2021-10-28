<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GrowLocation extends Model
{
    use HasFactory;
    protected $table = 'grow_locations';
    protected $fillable = [
        'name',
        'location',
    ];
}
