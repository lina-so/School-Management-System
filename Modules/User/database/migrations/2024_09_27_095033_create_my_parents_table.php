<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Modules\User\Models\Religion\Religion;
use Modules\User\Models\BloodType\BloodType;
use Illuminate\Database\Migrations\Migration;
use Modules\User\Models\Nationality\Nationality;
use Modules\School\Enums\MyParent\ParentTypeEnum;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('my_parents', function (Blueprint $table) {
            $table->id();
            $table->string('email')->unique();
            $table->string('password');

            $table->string('first_name');
            $table->string('last_name');

            $table->string('passport_ID')->unique();

            $table->string('phone')->unique();
            $table->string('job')->nullable();
            $table->string('address');

            $table->enum('type', ParentTypeEnum::getValues());

            $table->foreignIdFor(BloodType::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignIdFor(Nationality::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();
            $table->foreignIdFor(Religion::class)->constrained()->cascadeOnDelete()->cascadeOnUpdate();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('my_parents');
    }
};
