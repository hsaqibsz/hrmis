<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEducationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('education', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id'); // user id from users table should add
            $table->string('degree')->nullable();
            $table->string('university')->nullable();
            $table->string('location')->nullable();
            $table->date('from')->nullable();
            $table->date('to')->nullable();
            $table->integer('completed')->default(0);
            $table->string('deploma')->nullable();
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
        Schema::dropIfExists('education');
    }
}
