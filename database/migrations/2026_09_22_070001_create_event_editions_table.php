<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('event_editions', function (Blueprint $table) {
            $table->id();

            $table->foreignId('event_id')
                ->constrained()
                ->restrictOnDelete();

            $table->unsignedSmallInteger('year');

            $table->string('name');
            $table->string('slug');

            $table->date('event_date')->nullable();

            $table->dateTime('registration_start')->nullable();
            $table->dateTime('registration_end')->nullable();

            $table->string('status')->default('draft');

            $table->boolean('is_active')->default(false);

            $table->timestamps();

            $table->unique(['event_id', 'year']);
            $table->unique(['event_id', 'slug']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('event_editions');
    }
};
