<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTrackersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('trackers', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('adrress');
            $table->string('type');
            $table->string('serialnum');
            $table->string('model');
            $table->string('department_id');
            $table->foreign('department_id')->references('id')->on('department');
            $table->string('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->string('IMEI');
            $table->string('stutos');
            $table->time('stoptime');
            $table->time('lastsignal');
            $table->integer('speed')->nullable();
            $table->integer('tanker1')->nullable();
            $table->integer('tanker2')->nullable();
            $table->integer('tanker3')->nullable();
            $table->string('door1')->nullable();
            $table->string('door2')->nullable();
            $table->string('door3')->nullable();
            $table->string('door4')->nullable();
            $table->integer('angle')->nullable();
            $table->float('lat');
            $table->float('lng');
            $table->integer('altitude');
            $table->datetime('resive');
            $table->datetime('send');
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
        Schema::dropIfExists('trackers');
    }
}
