<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemsToMake extends Model
{
    use HasFactory;
    protected $table = 'items_to_make';
    protected $fillable = [
        'item_no',
        'item_name',
        'pro_id',
    ];
}
