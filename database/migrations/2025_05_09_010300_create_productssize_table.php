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
        Schema::create('productssize', function (Blueprint $table) {
            $table->unsignedBigInteger('id');                 // misma definición que el id de products
            $table->primary('id');                            // hacer que este ID sea la PK
            $table->foreign('id')->references('id')->on('products')->onDelete('cascade');
            $table->foreignId('size_id')->constrained('sizes')->onDelete('restrict');
            $table->decimal('price', 8, 2);
            $table->integer('stock');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('productssize');
    }
};
