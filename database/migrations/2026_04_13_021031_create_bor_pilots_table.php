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
        if (!Schema::hasTable('bor_pilots')) {
            Schema::create('bor_pilots', function (Blueprint $table) {
                $table->id();
                $table->string('last_name', 100);
                $table->string('initials', 30)->nullable();
                $table->string('full_name', 200)->nullable();
                $table->enum('in_book', ['Yes', 'No', 'Kind Of', 'Maybe', 'Additional'])->nullable();
                $table->text('notes')->nullable();
                $table->string('photo_path', 255)->nullable();
                $table->timestamp('created_at')->useCurrent();
            });
        }
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bor_pilots');
    }
};
