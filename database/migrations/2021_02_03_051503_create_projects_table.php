<?php

use Illuminate\Support\Facades\Schema;
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

        $table->increments('id');
           $table->string('name');
           $table->string('code')->unique();
           $table->integer('direct_benefeciaries');
           $table->integer('D_staff');
           $table->integer('S_staff');
           $table->date('start_date');
           $table->date('completion_date');
           $table->string('donor_id')->unique();
           $table->integer('Total_budget');
           $table->integer('Total_salaries');
           $table->string('currency_id');
           $table->text('location');
           $table->text('description')->nullable();
           $table->text('goals');
           $table->integer('user_id');
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
        Schema::dropIfExists('projects');
    }
}
