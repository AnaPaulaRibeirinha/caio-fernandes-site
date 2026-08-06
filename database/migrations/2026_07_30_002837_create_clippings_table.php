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
        Schema::create('clippings', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->string('slug')->unique();

            $table->string('source')->nullable();
            $table->date('published_at')->nullable();

            $table->text('excerpt');
            $table->longText('content')->nullable();

            $table->string('image')->nullable();
            $table->string('external_url')->nullable();

            $table->unsignedInteger('sort_order')->default(0);

            $table->boolean('is_featured')->default(false);
            $table->boolean('is_active')->default(true);

            $table->timestamps();

            $table->index(['is_active', 'published_at']);
        });
}
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clippings');
    }
};
