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
        "document",
        'user_id'

    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
