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
        if (!Schema::hasTable('social_posts')) {
            Schema::create('social_posts', function (Blueprint $table) {
                $table->id();
                $table->string('platform');
                $table->string('media_url');
                $table->string('media_type');
                $table->text('caption')->nullable();
                $table->string('hashtags')->nullable();
                $table->string('external_link')->nullable();
                $table->enum('status', ['draft', 'published'])->default('draft');
                $table->timestamp('published_at')->nullable();
                $table->timestamp('created_at')->useCurrent();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('social_posts');
    }
};
