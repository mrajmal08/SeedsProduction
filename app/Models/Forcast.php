<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Forcast extends Model
{
    use HasFactory;
    protected $table = 'forcasts';
    protected $fillable = [
        'item_no',
        'item_name',
        'description',
        'genus_code',
        'supplier',
        'customer_no',
        'featured_value',
        'requested_quantity',
        'current_quantity',
        'grow_id',
        'attr_id',
    ];
}
