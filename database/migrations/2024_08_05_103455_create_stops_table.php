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
        Schema::create('stops', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('travel_id');
            $table->string('title', 150);
            $table->text('description')->nullable();
            $table->string('thumb');
            $table->dateTime('date');
            $table->string('curiosity')->nullable();
            $table->string('note')->nullable();
            $table->tinyInteger('vote')->unsigned()->nullable();
            $table->timestamps();
            $table->timestamps();

            $table->foreign('travel_id')->references('id')->on('travels')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('stops', function (Blueprint $table){
            $table->dropForeign(['travel_id']);
        });
        Schema::dropIfExists('stops');
    }
};
