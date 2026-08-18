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
        Schema::table('clippings', function (Blueprint $table) {
            $table->string('type')
                ->default('article')
                ->after('source');
        });
    }

    public function down(): void
    {
        Schema::table('clippings', function (Blueprint $table) {
            $table->dropColumn('type');
        });
    }
};
