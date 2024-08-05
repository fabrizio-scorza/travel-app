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
        Schema::create('foods', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('stop_id');
            $table->string('title', 150);
            $table->text('description')->nullable();
            $table->string('thumb');
            $table->timestamps();

            $table->foreign('stop_id')->references('id')->on('stops')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('foods', function (Blueprint $table){
            $table->dropForeign(['stop_id']);
        });
        Schema::dropIfExists('food');
    }
};
