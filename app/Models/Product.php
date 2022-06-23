<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'curse', 'lesson','question','answer', 'variant_1', 'variant_2', 'variant_3', 'variant_4', 'image'
    ];
}
