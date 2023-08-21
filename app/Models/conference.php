<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class conference extends Model
{
    use HasFactory;

    protected $fillable = [
        "TitlePaper",
        "Author",
        'conferenceName',
        "conferenceAcronym",
        "conferenceLocation",
        "DOI",
        "URL",
        "bookSeries",
        "volume",
        "issue",
        "publicationYear",
        "publicationDate",
        "publisher",
        'document',
        'user_id'

    ];



    // protected $guarded = [];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
