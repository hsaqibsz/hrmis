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
            $table->string('donor_id');
            $table->integer('Total_budget');
            $table->integer('Total_salaries');
            $table->string('currency');
            $table->text('location');
            $table->text('description')->nullable();
            $table->text('goals');
            $table->integer('focal_point_id');
            $table->integer('documents_id');
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
