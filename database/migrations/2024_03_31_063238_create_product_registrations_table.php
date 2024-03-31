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
        Schema::create('product_registrations', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('category_id');
            $table->foreign('category_id')->references('id')->on('category_registrations');
            $table->unsignedBigInteger('class_id');
            $table->foreign('class_id')->references('id')->on('class_categories');
            $table->string('code_product');
            $table->string('product_name');
            $table->date('start_date_early');
            $table->date('end_date_early');
            $table->unsignedBigInteger('price_idr_early');
            $table->unsignedBigInteger('price_usd_early');
            $table->date('start_date_normal')->nullable();
            $table->date('end_date_normal')->nullable();
            $table->unsignedBigInteger('price_idr_normal')->nullable();
            $table->unsignedBigInteger('price_usd_normal')->nullable();
            $table->date('start_date_onsite');
            $table->date('end_date_onsite');
            $table->unsignedBigInteger('price_idr_onsite');
            $table->unsignedBigInteger('price_usd_onsite');
            $table->unsignedBigInteger('kuota');
            $table->boolean('status');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_registrations');
    }
};
