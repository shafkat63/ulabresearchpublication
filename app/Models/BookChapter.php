<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BookChapter extends Model
{
    use HasFactory;

    protected $fillable = [
        "TitlePaper",
        "Author",
        "Conference",
        "bookName",
        "chapterTitle",
        "issue",
        "Volume",
        "PublicationYear",
        "PublicationDate",
        "BookPublisher",
        "DOI",
        "URL"

    ];
}
