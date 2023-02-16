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
        Schema::create('perfil_permissao', function (Blueprint $table) {
            $table->unsignedInteger('perfil_id');
            $table->unsignedInteger('permissao_id');

            $table->foreign('perfil_id')->references('id')->on('perfils');
            $table->foreign('permissao_id')->references('id')->on('permissaos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
