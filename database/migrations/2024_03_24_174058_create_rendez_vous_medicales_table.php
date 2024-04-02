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
        Schema::create('rendez_vous_medicales', function (Blueprint $table) {
            $table->id();
            $table->foreignId('patient_id')->constrained();
            
            $table->date('date');

            $table->time('heure');
            $table->string('type');
            $table->string('statut');
            $table->timestamps();
          
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rendez_vous_medicales');
    }
};
