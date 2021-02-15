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
             $table->string('NIC_No')->nullable();
             $table->string('passport_No')->nullable();



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
            $table->integer('department_id')->nullable();
            $table->string('country')->default('Afghanistan');
            $table->integer('region_id')->nullable();
            $table->integer('province_id')->nullable();
            $table->integer('position_id')->nullable();
            $table->string('bank_account_number')->nullable();
            $table->number('salary')->nullable();
            $table->number('percentage_charged')->nullable();
            $table->string('join_date')->nullable();
            $table->string('expiry_date')->nullable();
          
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
