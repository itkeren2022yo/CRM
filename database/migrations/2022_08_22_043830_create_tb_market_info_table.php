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
        Schema::create('tb_market_info', function (Blueprint $table) {
            $table->increments('id_market_info');
            $table->integer('id_department')->unsigned();
            $table->integer('id_owner')->unsigned();
            $table->integer('id_funding')->unsigned();
            $table->integer('id_work_subsection')->unsigned();
            $table->string('proyek_name');
            $table->string('source_info');
            $table->timestamp('date_info');
            $table->timestamp('date_tender_plan');
            $table->integer('pagu_estimate');
            $table->string('name_input');
            $table->string('email_input');
            $table->string('phone_input');
            $table->softDeletes();
            $table->timestamps();
        });

        Schema::table('tb_market_info', function($table) {
            $table->foreign('id_owner')->references('id_owner')->on('tb_owner');
            $table->foreign('id_department')->references('id_department')->on('tb_department');
            $table->foreign('id_funding')->references('id_funding_source')->on('tb_funding_source');
            $table->foreign('id_work_subsection')->references('id_work_subsection')->on('tb_work_subsection');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tb_market_info');
    }
};
