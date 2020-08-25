<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('number')->unique();
            $table->string('name')->unique()->index();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('type')->nullable();
            $table->tinyInteger('activeUser')->default('1');
            $table->string('image')->nullable();
            $table->string('firstName')->nullable();
            $table->string('lastName');
            $table->string('middleName')->nullable();
            $table->string('extensionName')->nullable();
            $table->string('gender')->default('Male');
            $table->set('civilStatus',['Single','Married','Separated','Widowed'])->default('Single');
            $table->string('contacts')->nullable();
            $table->string('address')->nullable();
            $table->string('RFID')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
