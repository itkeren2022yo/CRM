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
        Schema::create('tb_owner', function (Blueprint $table) {
            $table->increments('id_owner');
            $table->integer('id_client_status')->unsigned();
            $table->integer('id_segment')->unsigned();
            $table->string('identity_number');
            $table->string('company_name');
            $table->string('address');
            $table->string('phone_number');
            $table->string('company_email');
            $table->integer('npwp');
            $table->text('experience');
            $table->string('name_pic_company');
            $table->string('position_pic_company');
            $table->string('name_cp');
            $table->string('position_cp');
            $table->string('phone_number_cp');
            $table->timestamps();
        });

        Schema::table('tb_owner', function($table) {
            $table->foreign('id_client_status')->references('id_client_status')->on('tb_client_status');
            $table->foreign('id_segment')->references('id_segment_owner')->on('tb_segment_owner');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_owner');
    }
};
