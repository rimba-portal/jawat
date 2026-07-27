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
        Schema::create('job_positions', function (Blueprint $table) {
            $table->id();
            $table->foreignId('org_unit_id')->nullable()->constrained();
            $table->enum('level', ['junior', 'mid', 'senior', 'lead', 'manager'])->nullable();
            $table->enum('status', ['open', 'filled', 'closed'])->default('open');
            $table->string('title');
            $table->text('description')->nullable();
            $table->json('attributes')->nullable();
            $table->timestamps();
        });
        Schema::create('job_roles', function (Blueprint $table) {
            $table->id();
            $table->enum('type', ['approval', 'operation', 'admin', 'reporting'])->nullable();
            $table->string('name');
            $table->text('description')->nullable();
            $table->json('attributes')->nullable();
            $table->timestamps();
        });
        Schema::create('job_position_roles', function (Blueprint $table) {
            $table->id();
            $table->foreignId('job_position_id')->constrained();
            $table->foreignId('job_role_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('job_position_roles');
        Schema::dropIfExists('job_roles');
        Schema::dropIfExists('job_positions');
    }
};
