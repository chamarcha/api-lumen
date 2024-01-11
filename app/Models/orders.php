<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class orders extends Model
{
    protected $primaryKey = 'order_id';
    protected $table = 'orders';
    protected $fillable = [
        'order_id', 'customer_id', 'order_date', 'total_amount'
    ];
    protected $hidden = [];
}