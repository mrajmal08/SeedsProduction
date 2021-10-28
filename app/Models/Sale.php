<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sale extends Model
{
    use HasFactory;
    protected $table = 'sales';
    protected $fillable = [
        'item_no',
        'item_name',
        'customer_name',
        'customer_contact',
        'customer_email',
        'quantity',
        'start_date',
        'end_date',
        'amount',
    ];
}
