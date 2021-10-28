<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Labour extends Model
{
    use HasFactory;
    protected $table = 'labours';
    protected $fillable = [
        'date',
        'name',
        'contact',
        'email',
        'today_work',
        'grow_id',
    ];
}
