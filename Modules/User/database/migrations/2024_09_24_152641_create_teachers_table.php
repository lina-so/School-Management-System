<?php

use Illuminate\Support\Facades\Schema;
use Modules\School\Models\Grade\Grade;
use Modules\User\Models\Specialization\Specialization;
use Illuminate\Database\Schema\Blueprint;
use Modules\User\Models\Religion\Religion;
use Modules\User\Models\BloodType\BloodType;
use Illuminate\Database\Migrations\Migration;
use Modules\School\Models\Classroom\Classroom;
use Modules\User\Models\Nationality\Nationality;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('teachers', function (Blueprint $table) {
            $table->id();
            $table->string('first_name');
            $table->string('last_name');
            $table->enum('gender', ['male', 'female']);
            $table->date('date_of_birth');
            $table->string('phone_number');

            $table->string('email')->unique();
            $table->string('password');
            $table->text('address')->nullable();

            $table->date('hire_date');
            $table->date('retired_date');

            $table->enum('job_title',[ 'teacher', 'Senior', 'Assistant'])->default('teacher');

            $table->integer('experience_years')->nullable();
            $table->decimal('salary', 8, 2)->nullable();

            $table->enum('education_level',[
            'High School Diploma',
            'Associates Degree',
            'Bachelors Degree',
            'Masters Degree',
            'Doctorate (PhD)',
            'Technical Diploma',
            'Vocational Training',
            'No Formal Education',
            'Other']);

            $table->enum('employment_type', ['full-time', 'part-time', 'contract']);
            $table->enum('status', ['active', 'on_leave', 'retired'])->default('active');

            $table->foreignIdFor(BloodType::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignIdFor(Nationality::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignIdFor(Religion::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();

            $table->foreignIdFor(Grade::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignIdFor(Specialization::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('teachers');
    }
};
