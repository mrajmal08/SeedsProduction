<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ItemsCanMake extends Model
{
    use HasFactory;
    protected $table = 'items_can_make';
    protected $fillable = [
        'item_no',
        'item_name',
        'pro_id',
    ];
}
