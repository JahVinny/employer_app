<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployees extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name',45);
            $table->string('last_name',45);
            $table->date('date_of_birth');
            $table->string('home_address',45);
            $table->string('cell_number',10)->nullable();
            $table->string('email_address',45);
            $table->string('tel_number',10)->nullable();
            $table->string('linkedin_link',45)->nullable();
            $table->string('facebook_link',45)->nullable();
            $table->string('job_title',45);
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
        Schema::dropIfExists('employees');
    }
}
