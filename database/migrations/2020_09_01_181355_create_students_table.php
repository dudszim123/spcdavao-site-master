<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('height')->default('0');
            $table->double('weight')->default(0);
            $table->string('nationality');
            $table->integer('dualCitizenship');
            $table->string('tribe');
            $table->string('religion');
            $table->string('contacts');
            $table->string('boardingHouseAddress')->nullable();
            $table->string('birthOrder');
            $table->string('reasonForEnrollingAtSpc')->nullable();
            $table->string('familyBackGround')->nullable();
            $table->string('fatherName')->nullable();
            $table->string('fatherAddress')->nullable();
            $table->string('fatherOccupation')->nullable();
            $table->string('fatherContact')->nullable();
            $table->string('motherName')->nullable();
            $table->string('motherAddress')->nullable();
            $table->string('motherOccupation')->nullable();
            $table->string('motherContact')->nullable();
            $table->string('DSWDhouseholdNumber')->nullable();
            $table->string('householdPerCapitalIncome')->nullable();
            $table->string('scholasticElementary')->nullable();
            $table->string('scholasticEleType')->nullable();
            $table->string('scholasticEleYear')->nullable();
            $table->string('scholasticEleHonor')->nullable();
            $table->string('scholasticHigh')->nullable();
            $table->string('scholasticHightype')->nullable();
            $table->string('scholasticHighYear')->nullable();
            $table->string('scholasticHighHonor')->nullable();
            $table->string('scholasticJunior')->nullable();
            $table->string('scholasticJuniorType')->nullable();
            $table->string('scholasticJuniorYear')->nullable();
            $table->string('scholasticJuniorHonor')->nullable();
            $table->string('scholasticSenior')->nullable();
            $table->string('scholasticSeniorType')->nullable();
            $table->string('scholasticSeniorYear')->nullable();
            $table->string('scholasticSeniorHonor')->nullable();
            $table->string('scholasticStrand')->nullable();
            $table->string('scholasticCollege')->nullable();
            $table->string('scholasticCollegeType')->nullable();
            $table->string('scholasticCollegeYear')->nullable();
            $table->string('scholasticCollegeHonor')->nullable();
            $table->string('scholasticCourse')->nullable();
            $table->string('varsity')->nullable();
            $table->string('contactEmergencyName')->nullable();
            $table->string('contactEmergencyRelationship')->nullable();
            $table->string('contactEmergencyAddress')->nullable();
            $table->string('contactEmergengy')->nullable();
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
}
