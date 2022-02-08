<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class YearMonth extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('year_months',function(Blueprint $table){
            $table->unsignedBigInteger('id');
            $table->foreign('id')->references('id')->on('administrations')->onDelete('cascade');
            $table->date('ym_id')->primary();

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('year_months');
    }
}
