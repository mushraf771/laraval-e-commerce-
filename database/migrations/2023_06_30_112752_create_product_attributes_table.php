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
        Schema::create('product_attributes', function (Blueprint $table) {
            $table->id();
            $table->integer('quantity');
            $table->decimal('price')->nullable();
            $table->string('color')->nullable();
            // $table->unsignedBigInteger('size')->nullable();
            $table->string('status')->default('available')->nullable();
            $table->unsignedBigInteger('product_id');
            $table->foreign('product_id')->references('id')->on('products');
            // $table->foreign('size')->references('id')->on('product_sizes');
            // $table->foreign('color')->references('id')->on('product_colors');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('product_attributes');
    }
};
