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
        Schema::create('journals', function (Blueprint $table) {
            $table->id();
            $table->string('TitlePaper');
            // $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('Author');
            $table->string('journalName');
            $table->string('issue');
            $table->string('volume')->nullable();
            $table->string('publicationYear');
            $table->string('publicationDate');
            $table->string('publisher');
            $table->string('DOI');
            $table->string('URL');
            $table->string('document')->nullable();
            $table->enum('status', ['Processing', 'Test 2', 'Test 3']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('journals');
    }
};
