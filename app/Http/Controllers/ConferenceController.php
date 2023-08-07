<?php

namespace App\Http\Controllers;

use App\Models\conference;
use Illuminate\Http\Request;

class ConferenceController extends Controller
{
    //
    public function createConferencePaper(Request $request)
    {
        // dd($request);
        $incomingFields = $request->validate(
            [
                "TitlePaper" => "required",
                "Author" => "required",
                "conferenceName" => ["required"],
                "conferenceAcronym" => "required",
                "conferenceLocation" =>  'required',
                "DOI" => "required",
                "URL" => "required",
                "bookSeries" => "required",
                "volume" => "required",
                "issue" => "required",
                "publicationYear" => "required",
                "publicationDate" => "required",
                "publisher" => "required",


            ]

        );
        $incomingFields['user_id'] = auth()->id(); 
        conference::create($incomingFields);
        // return redirect('/something');
        return back()->with('message', 'Post has been Created successfully!');
    }
}
