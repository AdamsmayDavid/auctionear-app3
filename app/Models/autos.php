<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class autos extends Model
{
    use HasFactory;
    protected $table = 'autos';
    protected $fillable = ['auto_type', 'description', 'auto_image'];
}
