<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use ESolution\DBEncryption\Traits\EncryptedAttribute;

class messages extends Model
{
    use HasFactory, EncryptedAttribute;//HasApiTokens
    protected $table = 'messages';
    protected $fillable = ['con_id', 'content', 'sender_id', 'receiver_id'];

    protected $encryptable = [
        'content',
    ];
}

