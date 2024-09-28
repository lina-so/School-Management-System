<?php

use Illuminate\Support\Facades\Schema;
use Modules\School\Models\Grade\Grade;
use Modules\User\Models\Student\Student;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Modules\School\Models\Classroom\Classroom;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('certificates', function (Blueprint $table) {
            $table->id();
            $table->string('certificate_ID')->unique();
            $table->string('certificate_name');
            $table->string('institution_name'); // اسم المؤسسة
            $table->date('issue_date'); // تاريخ اصدار الشهادة
            $table->date('expiration_date')->nullable();
            $table->string('Score')->nullable(); // معدل الطالب
            $table->text('description')->nullable();
            $table->string('certificate_file')->nullable(); // رابط لملف الشهادة
            $table->foreignIdFor(Grade::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignIdFor(Classroom::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignIdFor(Student::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('certificates');
    }
};
