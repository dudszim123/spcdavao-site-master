<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProgramsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('programs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('department_id');
            $table->string('code')->unique();
            $table->string('name');
            $table->string('major')->nullable();
            $table->string('category');
            $table->tinyInteger('active')->default(1);
            $table->timestamps();

            $table->tinyInteger('offer')->default(1);
            $table->foreign('department_id')->references('id')->on('departments');
            $table->index(['department_id', 'created_at']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('programs');
    }
}
