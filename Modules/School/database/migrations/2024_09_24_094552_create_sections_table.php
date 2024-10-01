<?php

use Illuminate\Support\Facades\Schema;
use Modules\School\Models\Grade\Grade;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Modules\School\Models\Classroom\Classroom;
use Modules\School\Enums\SectionStatus\SectionStatusEnum;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('sections', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->integer('capacity'); // number of students into the section

            $table->enum('status', SectionStatusEnum::getValues())
                ->default(SectionStatusEnum::Active);

            $table->foreignIdFor(Classroom::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignIdFor(Grade::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();


            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('sections');
    }
};
