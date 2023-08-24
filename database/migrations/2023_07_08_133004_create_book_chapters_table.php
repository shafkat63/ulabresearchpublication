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
        Schema::create('book_chapters', function (Blueprint $table) {
            $table->id();
            $table->string('TitlePaper');
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('Author');
            $table->string('bookName');
            $table->string('chapterTitle');
            $table->string('issue');
            $table->string('Volume');
            $table->string('PublicationYear');
            $table->string('PublicationDate');
            $table->string('BookPublisher');
            $table->string('document')->nullable();
            $table->string('DOI');
            $table->string('URL');
            $table->enum('status', ['Processing', 'Approve', 'Review','Reject','Forward To Account','Draft']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('book_chapters');
    }
};
