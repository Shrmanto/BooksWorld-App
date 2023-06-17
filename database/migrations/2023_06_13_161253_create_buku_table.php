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
        Schema::create('buku', function (Blueprint $table) {
            $table->id();
            $table->string('judul_buku');
            $table->string('image')->nullable();
            $table->string('pengarang');
            $table->string('penerbit');
            $table->text('sinopsis');
            $table->integer('jumlah');
            $table->unsignedBigInteger('kategori_id');
            $table->unsignedBigInteger('status_id');
            $table->timestamps();

            $table->foreign('kategori_id')
                    ->references('id')
                    ->on('kategori')
                    ->onDelete('cascade');
            $table->foreign('status_id')
                    ->references('id')
                    ->on('status')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('buku');
    }
};
