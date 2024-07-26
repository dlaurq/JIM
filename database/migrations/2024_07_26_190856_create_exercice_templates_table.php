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
        Schema::create('exercice_templates', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignIdFor(\App\Models\WorkoutTemplate::class);
            $table->string('name');
            $table->string('Number of sets');
            $table->string('Rep range');
            $table->string('Pause ');
            $table->string('RIR');
            $table->string('Tempo');
            $table->string('Notes');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('exercice_templates');
    }
};
