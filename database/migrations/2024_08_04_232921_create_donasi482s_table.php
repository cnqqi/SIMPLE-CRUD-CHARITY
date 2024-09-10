<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonasi482sTable extends Migration // Ganti nama kelas jika perlu
{
    public function up()
    {
        Schema::create('donasi482', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('nomor');
            $table->string('jenis_donasi');
            $table->decimal('jumlah_donasi', 10, 2);
            $table->text('keterangan')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('donasi482');
    }
}
