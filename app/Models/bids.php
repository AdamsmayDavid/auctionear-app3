<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class bids extends Model
{
    use HasFactory;

    protected $table = 'bids';

    protected $fillable = ['bid_amount', 'bidder_id', 'auction_id', 'auto_type', 'on_time'];

}
