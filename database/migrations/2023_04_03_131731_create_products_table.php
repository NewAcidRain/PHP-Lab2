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
            $table->string('title');
            $table->string('symbolic_code');
            $table->text('description');
            $table->dateTime('creation_date');
            $table->unsignedInteger('price');
            $table->string('img')->nullable();
            $table->string('quantity');
            $table->timestamps();

            $table->unsignedBigInteger('category_id');
            $table->index('category_id','category_id_idx');
            $table->foreign('category_id','products_category_id_foreign')->references('id')->on('categories')->OnDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
