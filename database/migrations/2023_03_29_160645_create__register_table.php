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
        Schema::create('_register', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('city');
            $table->string('country');
            $table->string('email')->unique();
            $table->integer('password');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('_register');
    }
};
