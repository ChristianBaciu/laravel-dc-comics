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
        Schema::create('comics', function (Blueprint $table) {
            $table->id();
            $table->string("title", 50); //  max 50 caratteri
            $table->text("description"); // testo
            $table->decimal("price", 5, 2); // 100.99
            $table->string("series", 100); //  max 100 caratteri
            $table->date("sale_date"); // 19/03/2024
            $table->string("type", 20); //  max 20 caratteri
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('comics');
    }
};
