<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class conference extends Model
{
    use HasFactory;

    // protected $fillable = [
    //     "TitlePaper",
    //     "Author",
    //     "conferenceAcronym",
    //     "conferenceLocation",
    //     "DOI",
    //     "URL",
    //     "bookSeries",
    //     "volume",
    //     "issue",
    //     "publicationYear",
    //     "publicationDate",
    //     "publisher",

    // ];

    protected $guarded = [];
}
