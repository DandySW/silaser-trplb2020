<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataPelangganTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_pelanggan', function (Blueprint $table) {
            $table->increments('id_pelanggan');
            $table->string('nama', 30);
            $table->string('username', 30)->unique();
            $table->string('password', 30);
            $table->string('email', 100)->unique();
            $table->rememberToken();
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
        Schema::dropIfExists('data_pelanggan');
    }
}
