<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Abauts extends Model
{
    use HasFactory;

    protected $table = 'abauts';
    protected $fillable = ['title','subtitle','descrip']; 
}
