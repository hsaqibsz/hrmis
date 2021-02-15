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
                        $table->integer('project_id');
                        $table->integer('position_id');
                        $table->integer('DorS')->default(1);
                        $table->string('Title_this_project');
                        $table->string('scan_contract');
                        $table->integer('percentage')->default(100);
                        $table->integer('salary');
                        $table->integer('currency_id');
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
