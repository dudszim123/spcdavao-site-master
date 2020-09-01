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
            $table->string('reasonForEnrollingAtSpc');
            $table->string('familyBackGround');
            $talbe->string('fatherName');
            $talbe->string('fatherAddress');
            $table->string('fatherOccupation');
            $table->string('fatherContact');
            $table->string('motherName');
            $table->string('motherAddress');
            $table->string('motherOccupation');
            $table->string('motherContact');
            $table->string('DSWDhouseholdNumber')->nullable();
            $table->string('householdPerCapitalIncome')->nullable();
            $table->string('scholasticElementary');
            $table->string('scholasticEleType');
            $table->string('scholasticEleYear');
            $table->string('scholasticEleHonor');
            $table->string('scholasticHigh');
            $table->string('scholasticHightype');
            $table->string('scholasticHighYear');
            $table->string('scholasticHighHonor');
            $table->string('scholasticJunior');
            $table->string('scholasticJuniorType');
            $table->string('scholasticJuniorYear');
            $table->string('scholasticJuniorHonor');
            $table->string('scholasticSenior');
            $table->string('scholasticSeniorType');
            $table->string('scholasticSeniorYear');
            $table->string('scholasticSeniorHonor');
            $table->string('scholasticStrand');
            $table->string('scholasticCollege');
            $table->string('scholasticCollegeType');
            $table->string('scholasticCollegeYear');
            $table->string('scholasticCollegeHonor');
            $table->string('scholasticCourse');
            $table->string('varsity');
            $table->string('contactEmergencyName');
            $table->string('contactEmergencyRelationship');
            $table->string('contactEmergencyAddress');
            $table->string('contactEmergengy');
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
