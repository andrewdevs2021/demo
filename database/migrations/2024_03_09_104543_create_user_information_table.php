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
        Schema::create('user_information', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('country_id')->unsigned();
            $table->bigInteger('city_id')->unsigned();
            $table->bigInteger('country_of_marriage_id')->unsigned()->nullable();
            $table->string('first_name', 50);
            $table->string('last_name', 50);
            $table->text('address');
            $table->foreign('country_id')->references('id')->on('countries');
            $table->foreign('city_id')->references('id')->on('cities');
            $table->date('date_of_birth');
            $table->boolean('is_married')->default(false);
            $table->date('date_of_marriage')->nullable();
            $table->foreign('country_of_marriage_id')->references('id')->on('countries')->nullable();
            $table->boolean('is_widowed')->default(false)->nullable();
            $table->boolean('is_passed_married')->default(false)->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_information');
    }
};
