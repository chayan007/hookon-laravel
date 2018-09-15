<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableInterns extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('interns', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('internship_id');
            $table->string('company');
            $table->string('profile');
            $table->string('recruiter_id');
            $table->foreign('recruiter_id')->references('id')->on('recruiters');
            $table->string('student_id');
            $table->foreign('student_id')->references('id')->on('students');
            $table->dateTime('applied_at');
            $table->string('status');
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
        Schema::dropIfExists('interns');
    }
}
