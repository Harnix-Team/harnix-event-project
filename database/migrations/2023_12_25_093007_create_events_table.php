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
        Schema::create('events', function (Blueprint $table) {

            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('name');
            $table->string('agency');
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('event_categories')->onDelete('cascade');
            $table->longText('description');
            $table->string('img');
            $table->string('place');
            $table->string('date_begin');
            $table->string('date_end');
            $table->string('tags');
            $table->timestamps();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('events', function (Blueprint $table) {

            $table->dropColumn('date_begin');
            $table->dropColumn('date_end');
            $table->dropColumn('tags');
        });
        
    }
};
