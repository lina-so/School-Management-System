<?php

use Modules\User\Models\Student;
use Illuminate\Support\Facades\Schema;
use Modules\School\Models\Grade\Grade;
use Illuminate\Database\Schema\Blueprint;
use Modules\School\Models\Section\Section;
use Illuminate\Database\Migrations\Migration;
use Modules\School\Models\Classroom\Classroom;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('promotions', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Student::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();

            $table->bigInteger('from_grade')->unsigned();
            $table->bigInteger('from_classroom')->unsigned();
            $table->bigInteger('from_section')->unsigned();


            $table->bigInteger('to_grade')->unsigned();
            $table->bigInteger('to_classroom')->unsigned();
            $table->bigInteger('to_section')->unsigned();

            $table->string('academic_year');
            $table->string('academic_year_new');


            $table->foreign('from_grade')->references('id')->on('grades')->onDelete('cascade');
            $table->foreign('from_classroom')->references('id')->on('classrooms')->onDelete('cascade');
            $table->foreign('from_section')->references('id')->on('sections')->onDelete('cascade');


            $table->foreign('to_grade')->references('id')->on('grades')->onDelete('cascade');
            $table->foreign('to_classroom')->references('id')->on('classrooms')->onDelete('cascade');
            $table->foreign('to_section')->references('id')->on('sections')->onDelete('cascade');


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('promotions');
    }
};
