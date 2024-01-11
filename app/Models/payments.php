<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class payments extends Model
{
    protected $primaryKey = 'payments_id';
    protected $table = 'payments';
    protected $fillable = [
        'payments_id', 'order_id', 'payments_date', 'payments_amount', 'payments_methods'
    ];
    protected $hidden = [];
}