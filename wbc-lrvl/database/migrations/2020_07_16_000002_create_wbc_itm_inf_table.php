<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWbcItmInfTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wbc_itm_inf', function (Blueprint $table) {
            $table->bigIncrements('seq');
            $table->string('url_inf_seq');
            $table->string('xtrct_typ');
            $table->string('xtrct_xpath');
            $table->string('xtrct_nm')->nullable();;
            $table->string('data_idx')->nullable();;
            $table->string('data_mod')->nullable();;
            $table->string('tmp_tbl');
            $table->string('col_id');
            $table->string('col_nm');
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
        Schema::dropIfExists('wbc_itm_inf');
    }
}
