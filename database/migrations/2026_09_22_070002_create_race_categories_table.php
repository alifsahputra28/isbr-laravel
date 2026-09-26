<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('race_categories', function (Blueprint $table) {
        $table->id();

        $table->foreignId('event_edition_id')
            ->constrained()
            ->restrictOnDelete();

        $table->string('name');
        $table->string('slug');

        $table->decimal('distance_km', 6, 3)->nullable();

        $table->unsignedInteger('quota')->nullable();

        $table->unsignedBigInteger('price')->nullable();

        $table->string('status')->default('active');

        $table->unsignedInteger('sort_order')->default(0);

        $table->timestamps();

        $table->unique([
            'event_edition_id',
            'slug',
        ]);
    });
    }

    public function down(): void
    {
        Schema::dropIfExists('race_categories');
    }
};
