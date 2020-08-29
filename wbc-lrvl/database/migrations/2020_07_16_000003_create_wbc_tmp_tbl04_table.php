<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWbcTmpTbl04Table extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wbc_tmp_tbl04', function (Blueprint $table) {
            $table->bigIncrements('seq');
            $table->string('url_inf_seq');
            $table->string('col_nm');
            $table->string('col_val');
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
        Schema::dropIfExists('wbc_tmp_tbl04');
    }
}
