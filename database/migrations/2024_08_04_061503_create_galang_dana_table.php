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
        Schema::create('galang_dana_502', function (Blueprint $table) {
            $table->id();
            $table->string('judul');
            $table->string('lembaga');
            $table->string('akun');
            $table->decimal('nominal', 15, 2);
            $table->text('tujuan');
            $table->timestamps();
        });
    }
    
};
