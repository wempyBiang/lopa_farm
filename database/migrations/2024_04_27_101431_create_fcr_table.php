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
        Schema::create('fcr', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("batch_id");
            $table->foreign("batch_id")->references("id")->on("batch");
            $table->double("rata_rata");
            $table->integer("jml_ayam");
            $table->double("fcr");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fcr');
    }
};
