<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePstaffsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pstaffs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('region_id');
            $table->integer('province_id');
            $table->integer('donor_id');
            $table->integer('project_id');
            $table->integer('position_id');
            $table->integer('DorS')->default(1);//direct or support, 1 for direct
            $table->string('title_this_project');
            $table->string('scan_contract'); 
            $table->integer('percentage')->default(100); // each donor has deffernt currency so the overall percentage culculation need one currency
            $table->integer('salary');
            $table->integer('currency_id');
            $table->date('start_date');
            $table->date('completion_date');
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
        Schema::dropIfExists('pstaffs');
    }
}
