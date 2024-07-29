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
        Schema::create('add_fields', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->references('id')->on('products')->onDelete('cascade');
            $table->string('size');
            $table->string('color');
            $table->string('brand');
            $table->string('composition');
            $table->integer('count')->nullable();
            $table->string('seo_h1')->nullable();
            $table->string('seo_title')->nullable();
            $table->string('seo_description')->nullable();
            $table->string('weight');
            $table->string('width');
            $table->string('height');
            $table->string('length');
            $table->string('package_weight');
            $table->string('package_width');
            $table->string('package_height');
            $table->string('package_length');
            $table->string('category');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('add_fields');
    }
};
