<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Purchase extends Model
{
    use HasFactory;
    protected $table = 'purchases';
    protected $fillable = [
        'item_no',
        'item_name',
        'company_name',
        'company_contact',
        'company_email',
        'quantity',
        'amount',
    ];
}
