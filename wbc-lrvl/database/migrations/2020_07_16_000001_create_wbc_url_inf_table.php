<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWbcUrlInfTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wbc_url_inf', function (Blueprint $table) {
            $table->bigIncrements('seq');
            $table->string('site');
            $table->string('url');
            $table->string('param_page_nm');
            $table->string('start_page');
            $table->string('end_page');
            $table->string('tbl_id');
            $table->string('tbl_nm');
            $table->string('slct_sql_typ');
            $table->string('use_yn');
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
        Schema::dropIfExists('wbc_url_inf');
    }
}
