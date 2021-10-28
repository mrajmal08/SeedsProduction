<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LabourWork extends Model
{
    use HasFactory;
    protected $table = 'labour_work';
    protected $fillable = [
        'work',
        'labour_id',
        'grow_id'
    ];
}
