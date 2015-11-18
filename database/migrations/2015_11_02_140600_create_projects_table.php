<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectTable extends Migration
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

           Schema::create('project_user', function(Blueprint $table) 
        {
            $table->integer('project_id')->unsigned()->index();
            $table->foreign('project_id')->references('id')->on('projects')->onDelete('cascade');

            $table->integer('user_id')->unsigned()->index();
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->timestamp('created_at'); 
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
        Schema::drop('project_user');

    }
}
