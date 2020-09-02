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
            // $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('program_id')->nullable();

            $table->integer('level')->default(1);
            $table->string('boardingHouseAddress')->nullable();
            $table->string('birthOrder')->nullable();
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
            $table->tinyInteger('needToEdit')->default(1);
            $table->timestamps();

            $table->primary('user_id');
            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('program_id')->references('id')->on('programs');
            $table->index(['user_id', 'program_id', 'created_at']);
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
