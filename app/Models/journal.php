<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class journal extends Model
{
    use HasFactory;
    // protected $guarded = [];




    protected $fillable = [
        "TitlePaper",
        "Author",
        "journalName",
        "issue",
        "volume",
        "publicationYear",
        "publicationDate",
        "publisher",
        "DOI",
        "URL",
        "document"

    ];
}
