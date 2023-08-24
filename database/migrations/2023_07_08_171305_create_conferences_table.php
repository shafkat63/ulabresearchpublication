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
        Schema::create('conferences', function (Blueprint $table) {
            $table->id();
            $table->string('TitlePaper');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('Author');
            $table->string('conferenceName');
            $table->string('conferenceAcronym');
            $table->string('conferenceLocation');
            $table->string('DOI');
            $table->string('URL');
            $table->string('bookSeries');
            $table->string('issue');
            $table->string('volume');
            $table->string('publicationYear');
            $table->string('publicationDate');
            $table->string('publisher');
            $table->enum('status', ['Processing', 'Approve', 'Review','Reject','Forward To Account','Draft']);
            $table->string('document')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('conferences');
    }
};
