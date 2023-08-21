<?php

namespace App\Http\Controllers;

use App\Models\conference;
use Illuminate\Http\Request;

class ConferenceController extends Controller
{
    
    public function show(conference $singleConferencePaper)
    {
        return view('Forms.conferencePaperShow', [
            'singleConferencePaper' => $singleConferencePaper
        ]);
    }

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
        if ($request->hasFile('document')) {


            // dd($request->file('document'));
            $incomingFields['document'] = $request->file('document')->store('documents', 'public');
        }
        $incomingFields['user_id'] = auth()->id(); 
        conference::create($incomingFields);
        // return redirect('/something');
        return back()->with('message', 'Post has been Created successfully!');
    }
}
