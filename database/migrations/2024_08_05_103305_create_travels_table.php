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
        Schema::create('travels', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('title', 150);
            $table->text('description')->nullable();
            $table->string('thumb');
            $table->dateTime('departure_date');
            $table->dateTime('return_date');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->cascadeOnDelete();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('travels', function (Blueprint $table){
            $table->dropForeign(['user_id']);
        });
        Schema::dropIfExists('travels');
    }
};
