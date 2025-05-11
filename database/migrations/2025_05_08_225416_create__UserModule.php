<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('user_modules', function (Blueprint $table) {
            $table->id('user_module_id');
            $table->foreignId('user_id')->constrained('users', 'user_id')->onDelete('cascade');
            $table->foreignId('module_id')->constrained('modules', 'module_id')->onDelete('cascade');
            $table->timestamps();
            $table->unique(['user_id', 'module_id']);

        });
    }

    public function down(): void
    {
        Schema::dropIfExists('user_modules');
    }
};