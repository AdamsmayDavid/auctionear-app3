<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('bids', function (Blueprint $table) {
            $table->id('bid_id');
            $table->integer('bid_amount');
            $table->integer('bidder_id')->references('id')->on('users')->unsigned();
            $table->integer('auction_id')->references('auction_id')->on('auctions')->unsigned();
            $table->string('auto_type');
            $table->string('on_time');
            $table->timestamps();
        });

        /*
        Schema::create('bids', function (Blueprint $table) {
            $table->id('bid_id');
            $table->integer('bid_amount');
            $table->integer('user_id')->references('id')->on('users')->unsigned();
            $table->integer('auction_id')->references('auction_id')->on('auctions')->unsigned();
            $table->integer('auto_type')->references('id')->on('autos')->unsigned();//to get the highest/lowet bid for specifc vehicle (use for busness, monitoring, etc)
            $table->timestamps();
        });

        */
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bids');
    }
};
