<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Juice extends Model
{
    use HasFactory;
    protected $table = 'juices';
    protected $fillable = [
        'juicename',
        'number',
        'image',
        'nicotin',
        'flavor',
        'brand',
        'price',
        'sellingprice',
    ];
}
