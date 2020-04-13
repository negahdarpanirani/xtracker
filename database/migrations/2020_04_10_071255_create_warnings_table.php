<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWarningsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('warnings', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('tracker_id')->nullable();
            $table->foreign('tracker_id')->references('id')->on('trackers');
            $table->integer('speedlimit')->nullable();
            $table->date('pathviolation')->nullable();
            $table->date('tanker1empty')->nullable();
            $table->date('tanker2empty')->nullable();
            $table->date('tanker3empty')->nullable();
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
        Schema::dropIfExists('warnings');
    }
}
