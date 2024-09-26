<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Modules\School\Models\Section\Section;
use Modules\User\Models\Religion\Religion;
use Modules\User\Models\BloodType\BloodType;
use Modules\User\Models\MyParents\MyParents;
use Illuminate\Database\Migrations\Migration;
use Modules\User\Models\Nationality\Nationality;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            // Authentication
            $table->string('email')->unique()->nullable();
            $table->string('password')->nullable();
            //info
            $table->string('first_name');
            $table->string('last_name');
            $table->string('middle_name')->nullable();
            $table->enum('gender', ['male', 'female']);
            $table->date('date_of_birth');

            $table->foreignIdFor(BloodType::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignIdFor(Nationality::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignIdFor(Religion::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();

            $table->string('phone_number')->nullable();
            $table->text('address')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('country')->nullable();

            // Educational Information
            $table->date('enrollment_date');
            $table->date('graduation_date')->nullable();

            $table->foreignIdFor(Grade::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignIdFor(Classroom::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignIdFor(Section::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignIdFor(MyParents::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();


            $table->enum('status', ['active', 'graduated', 'suspended', 'transferred', 'withdrawn', 'inactive'])->default('active');

            $table->timestamps();
            $table->softDeletes();
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('students');
    }
};
