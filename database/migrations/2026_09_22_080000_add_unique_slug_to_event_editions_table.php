<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        if (! Schema::hasIndex('event_editions', 'event_editions_slug_unique')) {
            Schema::table('event_editions', function (Blueprint $table) {
                $table->unique('slug');
            });
        }
    }

    public function down(): void
    {
        if (Schema::hasIndex('event_editions', 'event_editions_slug_unique')) {
            Schema::table('event_editions', function (Blueprint $table) {
                $table->dropUnique('event_editions_slug_unique');
            });
        }
    }
};
