<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateApplicantsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('applicants', function (Blueprint $table) {
            $table->id();

            $table->string('name');
            $table->string('email');
            $table->string('password');
            $table->string('firstName')->nullable();
            $table->string('lastName');
            $table->string('middleName')->nullable();
            $table->string('extensionName')->nullable();
            $table->string('gender')->default('Male');
            $table->date('birthdate')->nullable();
            $table->string('address')->nullable();
            $table->string('boardingHouseAddress')->nullable();
            $table->string('contact1')->nullable();
            $table->string('contact2')->nullable();
            $table->string('previousSchool')->nullable();
            $table->unsignedBigInteger('program_id')->nullable();
            $table->string('category');
            
            $table->string('applicantType');
            $table->string('typeOfStudent');
            $table->set('civilStatus',['Single','Married','Separated','Widowed'])->default('Single');
            $table->string('birthOrder');
            $table->tinyInteger('heightFeet')->default(0);
            $table->tinyInteger('heightIn')->default(0);
            $table->tinyInteger('weight')->default(0);
            $table->string('religion')->default('Roman Catholic');
            $table->string('nationality')->default('Filipino');
            $table->integer('dualCitizenship')->default(0);
            $table->integer('level')->default(1);
            $table->string('tribe')->default('NONE');
            $table->string('bloodType')->default('O');
            $table->string('placeOfBirth')->nullable();
            $table->string('reasonEnrollingAtSPC')->nullable();
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
            $table->string('fatherOccupation')->nullable();
            $table->string('fatherContact')->nullable();
            $table->string('motherName')->nullable();
            $table->string('motherAddress')->nullable();
            $table->string('motherOccupation')->nullable();
            $table->string('motherContact')->nullable();
            $table->string('scholasticNameOfSchoolElementary')->nullable();
            $table->string('scholasticPubPriElementary')->nullable();
            $table->string('scholasticYearGraduatedElementary')->nullable();
            $table->string('scholasticHonorElementary')->nullable();
            $table->string('scholasticNameOfSchoolJunior')->nullable();
            $table->string('scholasticPubPriJunior')->nullable();
            $table->string('scholasticYearGraduatedJunior')->nullable();
            $table->string('scholasticNameOfSchoolSenior')->nullable();
            $table->string('scholasticPubPriSenior')->nullable();
            $table->string('scholasticYearGraduatedSenior')->nullable();
            $table->string('scholasticHonorSenior')->nullable();
            $table->string('scholasticTrackStrand')->nullable();
            $table->string('scholasticNameOfSchoolCollege')->nullable();
            $table->string('scholasticPubPriCollege')->nullable();
            $table->string('scholasticYearGraduatedCollege')->nullable();
            $table->string('scholasticHonorCollege')->nullable();
            $table->string('scholasticProgram')->nullable();
            $table->string('varsity1')->nullable();
            $table->string('varsity2')->nullable();
            $table->string('varsity3')->nullable();
            $table->string('varsity4')->nullable();
            $table->string('varsity5')->nullable();
            $table->string('varsity6')->nullable();
            $table->string('personContactName')->nullable();
            $table->string('personContactRelationship')->nullable();
            $table->string('personContactAddress')->nullable();
            $table->string('personContactContact')->nullable();
            $table->string('reportCard')->nullable();
            $table->string('transcriptRecords')->nullable();
            $table->string('honorableDismissal')->nullable();
            $table->string('medicalCertificate')->nullable();
            $table->string('paymentReceipt');

            $table->string('applicantStatus')->default('Pedding');
            $table->timestamps();

            $table->foreign('program_id')->references('id')->on('programs');
            $table->index(['name', 'program_id', 'created_at']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('applicants');
    }
}
