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
        Schema::create('auctions', function (Blueprint $table) {
            $table->id('auction_id');
            $table->integer('auto_id')->references('id')->on('autos')->unsigned();
            $table->string('description');
            $table->integer('starting_price');
            $table->integer('user_id')->references('id')->on('users')->unsigned();
            $table->date('auction_date')->nullable();
            $table->time('auction_time')->nullable();
            $table->string('auctionImage');
            //$table->string('status');
            //$table->timestamp('end_time')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('auctions');
    }
};
