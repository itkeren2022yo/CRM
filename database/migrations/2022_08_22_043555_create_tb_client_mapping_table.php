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
        Schema::create('tb_client_mapping', function (Blueprint $table) {
            $table->increments('id_client_mapping');
            $table->integer('id_owner')->unsigned();
            $table->integer('id_scope_needed')->unsigned();
            $table->integer('option');
            $table->text('scope_work');
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::table('tb_client_mapping', function($table) {
            $table->foreign('id_owner')->references('id_owner')->on('tb_owner');
            $table->foreign('id_scope_needed')->references('id_scope_needed')->on('tb_scope_needed');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_client_mapping');
    }
};
