<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfilesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profiles', function (Blueprint $table) {
             $table->increments('id');

             $table->integer('user_id'); // user id from users table should add
             //Personal info
             $table->string('father_name')->nullable();
             $table->integer('marital_status')->default(0);
             $table->date('dob')->nullable();
             $table->string('nationality')->default('Afghan');
             $table->string('phone')->nullable();
             $table->integer('gender')->default(0);
             $table->string('contact_person_name')->nullable();
             $table->string('contact_person_phone')->nullable();

             //documents to be uploaded
             $table->string('avatar')->nullable();
             $table->string('resume')->nullable();
             $table->string('NIC_No')->nullable();
             $table->string('passport_No')->nullable();
             $table->string('NIC')->nullable();
             $table->string('passport')->nullable();



             /*Physical address*/
             $table->string('permanent_village')->nullable();
             $table->string('permanent_district')->nullable();
             $table->string('permanent_province')->nullable();

             $table->string('current_village')->nullable();
             $table->string('current_district')->nullable();
             $table->string('current_province')->nullable();
             /*end Physical address*/

             //Extra Information
             $table->text('habit_interests')->nullable();
             $table->integer('it_skills')->default(0); // poor, fair, good, excellent
             $table->integer('education_id')->nullable(); // user id from users table should add
             $table->integer('trainings_id')->nullable(); // user id from users table should add

             /*social media addresses*/
             $table->string('linked_in_profile')->nullable();
             $table->string('facebook')->nullable();
             $table->string('twitter')->nullable();
             $table->string('linked')->nullable();
             /*social media addresses*/
            
            //HR information
            $table->string('department')->nullable();
            $table->string('country')->default('Afghanistan');
            $table->string('zone')->nullable();
            $table->string('province')->nullable();
            $table->string('position')->nullable();
            $table->string('join_date')->nullable();
            $table->string('expiry_date')->nullable();

            //Financial Information
            $table->string('bank_account_number')->nullable();
            $table->string('scan_bank_account_card')->nullable();
            $table->integer('salary')->nullable();
            $table->string('currency')->nullable();
            $table->integer('role')->default(0);
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
        Schema::dropIfExists('profiles');
    }
}
