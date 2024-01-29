<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class auctions extends Model
{
    use HasFactory;
    protected $table = 'auctions';

    protected $fillable = [ 'auto_id', 
                            'description',
                            'starting_price',  
                            'user_id',
                            'auction_date',
                            'auction_time',
                            'auctionImage',
                            //'status', 
                            //'end_time', 
                        ];
}
