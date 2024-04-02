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
                            'creator_id',
                            'status',
                            'end_time', 
                            //'auction_date',
                            //'auction_time',
                            'auctionImage1',
                            'auctionImage2',
                            'auctionImage3',
                            'auctionImage4',
                            //'status', 
                            //'end_time', 
                        ];
}
