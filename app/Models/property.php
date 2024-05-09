<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class property extends Model
{
    use HasFactory;
    protected $fillable = [

        'property_name',
        'property_adress',
        'price',
        'bedrooms',
        'bathrooms',
        'size',
        'description',
        'image',
    ];
}
