<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Member extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('members',function(Blueprint $table){
            $table->unsignedBigInteger('id');
            $table->foreign('id')->references('id')->on('administrations')->onDelete('cascade');
            $table->bigIncrements('member_id');
            $table->string('name');
            $table->date('monthYear');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('members');
    }
}
