<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('exercise_templates', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignIdFor(\App\Models\WorkoutTemplate::class);
            $table->string('name');
            $table->string('number_of_sets');
            $table->string('rep_range');
            $table->string('pause');
            $table->string('rir');
            $table->string('tempo');
            $table->string('notes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exercise_templates');
    }
};
