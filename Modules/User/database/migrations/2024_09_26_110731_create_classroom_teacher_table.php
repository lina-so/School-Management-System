<?php

use Illuminate\Support\Facades\Schema;
use Modules\User\Models\Teacher\Teacher;
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
        Schema::create('classroom_teacher', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Classroom::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignIdFor(Teacher::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('classroom_teacher');
    }
};
