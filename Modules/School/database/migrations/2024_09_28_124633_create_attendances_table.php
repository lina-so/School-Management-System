<?php

use Illuminate\Support\Facades\Schema;
use Modules\School\Models\Grade\Grade;
use Modules\User\Models\Student\Student;
use Modules\User\Models\Teacher\Teacher;
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
        Schema::create('attendances', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Student::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();

            $table->foreignIdFor(Grade::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignIdFor(Classroom::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignIdFor(Section::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignIdFor(Teacher::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();

            $table->date('attendence_date');
            $table->boolean('attendence_status');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('attendances');
    }
};
