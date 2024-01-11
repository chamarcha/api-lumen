<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class customers extends Model
{
    protected $primarykey = 'customer_id';
    protected $table = 'customers';
    protected $fillable = [
        'customer_id', 'first_name', 'last_name', 'email', 'phone', 'address'
    ];
    protected $hidden = [];
}