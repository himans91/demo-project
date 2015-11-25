<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('title');
            $table->string('telephone');
            $table->Boolean('location');
            $table->string('street');
            $table->string('zippcode');
            $table->string('city');
            $table->date('startdate');
            $table->date('enddate');
            $table->timestamp('created_at');
            $table->timestamp('updated_at');
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void_u
     */
    public function down()
    {
        Schema::drop('projects');
        

    }
}
