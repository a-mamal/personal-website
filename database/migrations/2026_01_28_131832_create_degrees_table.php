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
        Schema::create('degrees', function (Blueprint $table) {
            $table->id();

            $table->foreignId('profile_id')
                ->constrained()
                ->onDelete('cascade');

            $table->foreignId('issuer_id')
                ->constrained()
                ->onDelete('cascade');

            $table->string('title');
            $table->string('level');              // e.g.  Bachelor, Master
            $table->string('field')->nullable();  // specialisation

            $table->date('start_date')->nullable();
            $table->date('end_date')->nullable();

            $table->string('grade')->nullable();
            $table->string('image')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('degrees');
    }
};
