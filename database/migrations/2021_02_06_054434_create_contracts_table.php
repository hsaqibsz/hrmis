<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContractsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contracts', function (Blueprint $table) {
            $table->increments('id');
                        //Financial/contract Information
                        $table->integer('user_id');
                        $table->integer('region_id');
                        $table->integer('province_id');
                        $table->integer('project_id');
                        $table->integer('position_id');
                        $table->string('Title_this_project');
                        $table->string('bank_account_number');
                        $table->string('scan_bank_account_card');
                        $table->string('scan_contract');
                        $table->integer('percentage');
                        $table->integer('salary');
                        $table->string('currency');
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
        Schema::dropIfExists('contracts');
    }
}
