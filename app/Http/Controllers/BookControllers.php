<?php

namespace App\Http\Controllers;

use App\Models\BookChapter;
use Illuminate\Http\Request;

class BookControllers extends Controller
{
    //

    public function createBookPost(Request $request)
    {

        // dd($request);
        $incomingFields = $request->validate(
            [
                "TitlePaper" => "required",
                "Author" => "required",
                
                "bookName" => "required",
                "chapterTitle" => "required",
                "issue" => "required",
                "Volume" => "required",
                "PublicationYear" => "required",
                "PublicationDate" => "required",
                "BookPublisher" => "required",
                "DOI" => "required",
                "URL" => "required"

            ]
        );
        BookChapter::create($incomingFields);
        return redirect('/something');
    }
}
