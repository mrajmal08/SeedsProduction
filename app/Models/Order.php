<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $fillable = [
        'order_no',
        'description',
        'source_type',
        'source_no',
        'quantity',
        'due_date',
        'end_date',
        'routing_no',
        'status',
        'grow_id',
        'pro_id',
    ];
}
