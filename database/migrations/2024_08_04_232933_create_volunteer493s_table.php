<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVolunteer493sTable extends Migration // Pastikan nama kelas unik
{
    public function up()
    {
        Schema::create('volunteer493', function (Blueprint $table) {
            $table->id();
            $table->string('nama_lengkap');
            $table->string('jenis_kelamin');
            $table->string('alamat');
            $table->string('alamat_email');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('volunteer493');
    }
}
