<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExperiencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('experiences', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->datetime('from');
            $table->datetime('to')->nullable();
            $table->integer('not_finished')->default(0);
             $table->string('location')->nullable();
            $table->string('title');
            $table->string('organization');
            $table->integer('salary');
            $table->string('unit')->default('AFN');
            $table->string('supervisor');
            $table->string('supervisor_email')->nullable();
            $table->integer('numberOfStaff')->default(0);
            $table->text('reasonOfLeaving');
            $table->text('responsibilities');
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
        Schema::dropIfExists('experiences');
    }
}
