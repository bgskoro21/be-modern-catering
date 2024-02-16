<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('paket_galleries', function (Blueprint $table) {
            $table->id();
            $table->foreignId('paket_prasmanan_id')->constrained('paket_prasmanans')->cascadeOnDelete()->cascadeOnUpdate();
            $table->text('gambar');
            $table->boolean('is_default')->default(false);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('paket_galleries');
    }
};
