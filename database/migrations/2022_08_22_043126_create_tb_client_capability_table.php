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
        Schema::create('tb_client_capability', function (Blueprint $table) {
            $table->increments('id_client_capability');
            $table->integer('id_owner')->unsigned();
            $table->integer('id_question')->unsigned();
            $table->integer('option');
            $table->text('description');
            $table->integer('status');
            $table->timestamps();
        });

        Schema::table('tb_client_capability', function($table) {
            $table->foreign('id_owner')->references('id_owner')->on('tb_owner');
            $table->foreign('id_question')->references('id_capability_question')->on('tb_capability_question');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_client_capability');
    }
};
