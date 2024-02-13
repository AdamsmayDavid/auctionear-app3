<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class conversations extends Model
{
    use HasFactory;
    protected $table = 'conversations';
    protected $fillable = ['user_one', 'user_two'];
}
