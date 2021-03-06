<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDoctorInfosTable extends Migration
{
    /**
     * Run the migrations.
     *
     *
     */
    public function up()
    {
        Schema::create('doctor_infos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->string('phonenumber');
            $table->string('email')->unique();
            $table->string('password');
            $table->string('specialist');
            $table->string('picture');
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
        Schema::dropIfExists('doctor_infos');
    }
}
