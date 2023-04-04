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
        Schema::create('credenciais', function (Blueprint $table) {
            $table->id();
            $table->string('outlookUser');
            $table->string('outlookPass');
            $table->string('intraUser');
            $table->string('intraPass');
            $table->string('sicoobUser');
            $table->string('sicoobPass');
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
        Schema::dropIfExists('credenciais');
    }
};
