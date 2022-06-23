<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicatigory extends Model
{
    use HasFactory;

    protected $table = 'serve_tables';
    protected $fillable = ['sername', 'serdes', 'status'];
}
