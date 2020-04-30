<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDriversTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('drivers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('selfie_image')->nullable();
            $table->string('dob');
            $table->string('age');
            $table->string('mobile');
            $table->string('other_mobile');
            $table->string('licence_type');
            $table->string('licence_num');
            $table->string('licence_expiry_date');
            $table->string('year_of_experience');
            $table->string('address');
            $table->string('adharcard_num');
            $table->string('adharcard_front_copy');
            $table->string('adharcard_back_copy');
            $table->string('vehicle_type');
            $table->string('vehicle_num');
            $table->string('vehicle_photo');
            $table->string('vehicle_insurance_num');
            $table->string('vehicle_insurance_exp_date');
			$table->string('vehicle_rc_num');
			$table->string('vehicle_rc_exp_date');
			$table->string('status');
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
        Schema::dropIfExists('drivers');
    }
}
