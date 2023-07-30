<?php

namespace App\Http\Controllers;

use App\Models\BookChapter;
use Illuminate\Http\Request;

class BookControllers extends Controller
{
    //

    public function show(BookChapter $singleBook)
    {
        return view('Forms.bookShow', [
            'singleBook' => $singleBook
        ]);
    }
    public function createBookPost(Request $request)
    {

        // dd($request);
        // dd($request->file('document'));
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

        if ($request->hasFile('document')) {


            // dd($request->file('document'));
            $incomingFields['document'] = $request->file('document')->store('documents', 'public');
        }

        $incomingFields['user_id'] = auth()->id();
        BookChapter::create($incomingFields);
        return back()->with('message', 'Post has been Created successfully!');
    }
}
