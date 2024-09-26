<?php

use Modules\User\Models\Teacher\Teacher;
use Illuminate\Support\Facades\Schema;
use Modules\School\Models\Grade\Grade;
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
        Schema::create('subjects', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->foreignIdFor(Grade::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignIdFor(Classroom::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignIdFor(Teacher::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->enum('status',['active','inactive'])->default('active');



            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subjects');
    }
};
