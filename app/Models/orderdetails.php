<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class orderdetails extends Model
{
    protected $primaryKey = 'order_detail_id';
    protected $table = 'orderdetails';
    protected $fillable = [
        'order_detail_id', 'order_id', 'book_id', 'quantity', 'subtotal'
    ];
    protected $hidden = [];
}