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
        Schema::create('user_perfil', function (Blueprint $table) {
            $table->unsignedInteger('perfil_id');
            $table->unsignedInteger('user_id');

            $table->foreign('perfil_id')->references('id')->on('perfils');
            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_perfil');
    }
};
