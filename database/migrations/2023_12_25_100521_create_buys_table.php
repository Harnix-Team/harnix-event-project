<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBuysTable extends Migration
{
    public function up(): void
    {
        Schema::create('buys', function (Blueprint $table) {
            
            $table->id();
            $table->unsignedBigInteger('customer_id');
            $table->unsignedBigInteger('ticket_id');
            $table->integer('transaction_id'); 
            $table->longText('qr_code');
            $table->string('price');
            $table->boolean('checked')->default(0);
            $table->timestamps();

            $table->foreign('customer_id')->references('id')->on('customers')->onDelete('cascade');
            $table->foreign('ticket_id')->references('id')->on('tickets')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('buys');
    }
};