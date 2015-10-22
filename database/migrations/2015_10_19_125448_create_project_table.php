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
        Schema::create('project', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->string('title');
            $table->string('telephone');
            $table->String('location');
            $table->boolean('extern');
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
     * @return void
     */
    public function down()
    {
        Schema::drop('project');
    }
}
