<?php

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
        Schema::create('online_classes', function (Blueprint $table) {
            $table->id();
            $table->boolean('integration');
            $table->foreignIdFor(Grade::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignIdFor(Classroom::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignIdFor(Section::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();

            $table->string('meeting_id');
            $table->string('topic');//عنوان الحصة
            $table->dateTime('start_at');
            $table->integer('duration')->comment('minutes');
            $table->string('password')->comment('meeting password');
            $table->text('start_url');//لينك الاجتماع يلي رح يعمله المدرس
            $table->text('join_url');//لينك الاجتماع يلي رح ابعته للطلاب
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('online_classes');
    }
};
