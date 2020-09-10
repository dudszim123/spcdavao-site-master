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
         
            $table->tinyInteger('level')->default(1);
            $table->string('boardingHouseAddress')->nullable();
            $table->string('birthOrder',24)->nullable();
            $table->string('reasonForEnrollingAtSpc')->nullable();
            $table->tinyInteger('FGplt')->nullable();
            $table->tinyInteger('FGps')->nullable();
            $table->tinyInteger('FGdf')->nullable();
            $table->tinyInteger('FGdm')->nullable();
            $table->tinyInteger('FGfr')->nullable();
            $table->tinyInteger('FGmr')->nullable();
            $table->tinyInteger('FGfo')->nullable();
            $table->tinyInteger('FGmo')->nullable();
            $table->string('fatherName')->nullable();
            $table->string('fatherAddress')->nullable();
            $table->string('fatherOccupation',64)->nullable();
            $table->string('fatherContact',24)->nullable();
            $table->string('motherName')->nullable();
            $table->string('motherAddress')->nullable();
            $table->string('motherOccupation',64)->nullable();
            $table->string('motherContact',24)->nullable();
            $table->string('DSWDhouseholdNumber',24)->nullable();
            $table->double('householdPerCapitalIncome')->nullable();
            $table->string('scholasticNameOfSchoolElementary')->nullable();
            $table->string('scholasticPubPriElementary',24)->nullable();
            $table->string('scholasticYearGraduatedElementary',24)->nullable();
            $table->string('scholasticHonorElementary',24)->nullable();
            $table->string('scholasticNameOfSchoolHigh');
            $table->string('scholasticPubPriHigh', 24);
            $table->string('scholasticYearHigh', 24);
            $table->string('scholasticHonorHigh', 24);
            $table->string('scholasticNameOfSchoolJunior')->nullable();
            $table->string('scholasticPubPriJunior',24)->nullable();
            $table->string('scholasticYearGraduatedJunior',24)->nullable();
            $table->string('scholasticNameOfSchoolSenior')->nullable();
            $table->string('scholasticPubPriSenior',24)->nullable();
            $table->string('scholasticYearGraduatedSenior',24)->nullable();
            $table->string('scholasticHonorSenior',24)->nullable();
            $table->string('scholasticTrackStrand')->nullable();
            $table->string('scholasticNameOfSchoolCollege')->nullable();
            $table->string('scholasticPubPriCollege',24)->nullable();
            $table->string('scholasticYearGraduatedCollege',24)->nullable();
            $table->string('scholasticHonorCollege',24)->nullable();
            $table->string('scholasticProgram')->nullable();
            $table->string('varsity1',64)->nullable();
            $table->string('varsity2',64)->nullable();
            $table->string('varsity3',64)->nullable();
            $table->string('varsity4',64)->nullable();
            $table->string('varsity5',64)->nullable();
            $table->string('varsity6',64)->nullable();
            $table->string('personContactName')->nullable();
            $table->string('personContactRelationship',64)->nullable();
            $table->string('personContactAddress')->nullable();
            $table->string('personContactContact',24)->nullable();
            $table->tinyInteger('ableEditInformation')->default(0);
            $table->string('remark')->nullable();
            $table->string('studentStatus')->default('Enrolled');
            $table->string('admissionStatus');
            $table->timestamps();


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
