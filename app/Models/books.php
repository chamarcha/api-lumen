<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;


class books extends Model
{
    protected $primaryKey = 'book_id';
    protected $table = 'books';
    protected $fillable = [
        'book_id', 'title', 'author', 'genre','price','stock_quantity'
    ];
    protected $hidden = [];
}
