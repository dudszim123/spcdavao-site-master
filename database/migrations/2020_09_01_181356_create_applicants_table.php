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
            $table->string('gender',6)->default('Male');
            $table->date('birthdate')->nullable();
            $table->string('address')->nullable();
            $table->string('boardingHouseAddress')->nullable();
            $table->string('contact1',24)->nullable();
            $table->string('contact2',24)->nullable();
            $table->string('previousSchool')->nullable();
            $table->unsignedBigInteger('program_id')->nullable();
            $table->tinyInteger('level')->default(1);
            $table->string('category',64)->nullable();
            $table->string('applicantType',64)->nullable();
            $table->string('typeOfStudent',64)->nullable();
            $table->set('civilStatus',['Single','Married','Separated','Widowed'])->default('Single');
            $table->string('birthOrder',24)->nullable();
            $table->tinyInteger('height')->default(0);
            $table->tinyInteger('weight')->default(0);
            $table->string('religion',64)->default('Roman Catholic');
            $table->string('nationality',64)->default('Filipino');
            $table->integer('dualCitizenship')->default(0);
            $table->string('tribe',64)->default('NONE');
            $table->string('bloodType',24)->default('O');
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
            $table->string('fatherName',64)->nullable();
            $table->string('fatherAddress')->nullable();
            $table->string('fatherOccupation',64)->nullable();
            $table->string('fatherContact',24)->nullable();
            $table->string('motherName',64)->nullable();
            $table->string('motherAddress')->nullable();
            $table->string('motherOccupation',64)->nullable();
            $table->string('motherContact',24)->nullable();
            $table->string('scholasticNameOfSchoolElementary')->nullable();
            $table->string('scholasticPubPriElementary',24)->nullable();
            $table->string('scholasticYearGraduatedElementary',24)->nullable();
            $table->string('scholasticHonorElementary',24)->nullable();
            $table->string('scholasticNameOfSchoolHigh')->nullable();
            $table->string('scholasticPubPriHigh', 24)->nullable();
            $table->string('scholasticYearHigh', 24)->nullable();
            $table->string('scholasticHonorHigh', 24)->nullable();
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

            $table->string('shortEssay')->nullable();
            $table->string('tor')->nullable();
            $table->string('prcLicense')->nullable();
            $table->string('marriedContract')->nullable();
            $table->string('thesisDescription')->nullable();
            $table->string('birthCertificate')->nullable();
            $table->string('reportCard')->nullable();
            $table->string('transcriptRecords')->nullable();
            $table->string('honorableDismissal')->nullable();
            $table->string('medicalCertificate')->nullable();
            $table->string('paymentReceipt')->nullable();
            $table->string('noa')->nullable();

            $table->string('remark')->nullable();
            $table->string('applicantStatus',24)->default('Pending');
            $table->string('admissionStatus',24)->nullable();
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
