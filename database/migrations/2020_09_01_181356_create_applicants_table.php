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
            $table->unsignedBigInteger('program_id')->nullable();

            $table->string('category');
            $table->string('type');
            $table->integer('level');

            $table->string('name')->unique();
            $table->string('email')->unique();
            
            $table->string('firstName')->nullable();
            $table->string('lastName');
            $table->string('middleName')->nullable();
            $table->string('extensionName')->nullable();
            $table->string('gender')->default('Male');
            $table->date('birthdate')->nullable();
            $table->string('placeOfBirth')->nullable();
            $table->set('civilStatus',['Single','Married','Separated','Widowed'])->default('Single');
            $table->string('contacts')->nullable();
            $table->string('address')->nullable();
            $table->string('RFID')->nullable();
            $table->string('height')->default('0|0');
            $table->double('weight')->default(0);
            $table->string('religion')->default('Roman Catholic');
            $table->string('nationality')->default('Filipino');
            $table->integer('dualCitizenship')->default(0);
            $table->string('tribe')->default('NONE');
            $table->string('bloodType')->default('O');
            $table->string('imageFile1')->nullable();
            $table->string('imageFile2')->nullable();
            $table->string('imageFile3')->nullable();
            $table->string('imageFile4')->nullable();
            $table->string('imageFile5')->nullable();
            $table->string('imageFile6')->nullable();
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
