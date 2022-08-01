<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'detail',
        'stock',
        'price',
        'image',
        'category_id',
        'user_id',
        'comment_id'
    ];
}
