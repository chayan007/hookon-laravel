<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableInternships extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('internships', function (Blueprint $table) {
            $table->increments('id');
            $table->string('company');
            $table->string('profile');
            $table->string('email');
            $table->string('logo_url');
            $table->string('url');
            $table->string('phone');
            $table->string('skills');
            $table->string('desc');
            $table->string('about');
            $table->string('location');
            $table->string('duration');
            $table->string('stipend');
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
        Schema::dropIfExists('internships');
    }
}
