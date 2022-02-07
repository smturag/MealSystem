<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;


class MealStorage extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meal_storages', function (Blueprint $table) {
            $table->bigInteger('id');
            $table->foreign('id')->references('id')->on('administrations')->onDelete('cascade');
            $table->date('ym_id');
            $table->foreign('ym_id')->references('ym_id')->on('year_months')->onDelete('cascade');
            $table->Integer('member_id');
            $table->foreign('member_id')->references('member_id')->on('members')->onDelete('cascade');
            $table->date('date');
            $table->integer('meal');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('meal_storages');
    }
}
