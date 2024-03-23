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
        Schema::create('biodatas', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('nameCertificate');
            $table->string('institution');
            $table->string('country');
            $table->string('province')->nullable();
            $table->string('city');
            $table->string('address', 1000)->nullable();
            $table->string('zipcode')->nullable();
            $table->string('phoneNumber');
            $table->string('secondEmail')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('biodatas');
    }
};
