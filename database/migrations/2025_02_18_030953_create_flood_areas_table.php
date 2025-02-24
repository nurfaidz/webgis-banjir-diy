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
        Schema::create('flood_areas', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->text('geojson');
            $table->string('risk_level');
            $table->date('last_flood_date');
            $table->string('adm4_code')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('flood_areas');
    }
};
