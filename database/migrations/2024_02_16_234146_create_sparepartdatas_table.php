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
        Schema::create('sparepartdatas', function (Blueprint $table) {
            $table->id();
            $table->string('order');
            $table->string('code_part');
            $table->string('name_part');
            $table->bigInteger('qty');
            $table->bigInteger('cogs');
            $table->bigInteger('price');
            $table->timestamps();
            $table->string('image')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sparepartdatas');
    }
};
