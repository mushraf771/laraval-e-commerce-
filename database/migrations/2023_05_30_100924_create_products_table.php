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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('brand_id')->nullable();
            // $table->unsignedBigInteger('subcategory_id')->nullable();
            $table->unsignedBigInteger('category_id')->nullable();
            $table->string('name');
            $table->string('slug');
            $table->text('description')->nullable();
            $table->unsignedInteger('quantity');
            $table->decimal('price', 8, 2)->nullable();
            $table->decimal('sale_price', 8, 2)->nullable();
            $table->boolean('status')->default(1);
            $table->boolean('featured')->default(0);
            $table->foreign('brand_id')->references('id')->on('brands')->onDelete('cascade');
            // $table->foreign('subcategory_id')->references('id')->on('sub_categories')->onDelete('cascade');
            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->timestamps();
            // $table->decimal('weight', 8, 2)->nullable();
            // $table->string('color')->nullable();
            // $table->string('size')->nullable();
        });
        // Schema::create('products', function (Blueprint $table) {
        //     $table->id();
        //     $table->unsignedBigInteger('brand_id');
        //     $table->unsignedBigInteger('category_id');
        //     $table->string('sku');
        //     $table->string('name');
        //     $table->string('slug');
        //     $table->text('description')->nullable();
        //     $table->unsignedInteger('quantity');
        //     $table->decimal('weight', 8, 2)->nullable();
        //     $table->decimal('price', 8, 2)->nullable();
        //     $table->decimal('sale_price', 8, 2)->nullable();
        //     $table->boolean('status')->default(1);
        //     $table->boolean('featured')->default(0);
        //     $table->foreign('brand_id')->references('id')->on('brands')->onDelete('cascade');
        //     $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
        //     $table->timestamps();
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
