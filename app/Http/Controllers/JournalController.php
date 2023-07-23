<?php

namespace App\Http\Controllers;

use App\Models\journal;
use Illuminate\Http\Request;

class JournalController extends Controller
{
    //


    public function show(journal $singleJournal){
        return view('Forms.show', [
            'singleJournal' => $singleJournal
        ]);

    }

    public function createJournalartical(Request $request)
    {
        // dd($request);
        // dd($request->file('document'));
        $incomingFields = $request->validate(
            [
                "TitlePaper" => "required",
                "Author" => "required",
                "journalName" => ["required"],
                "issue" => "required",
                "volume" =>  ["nullable"],
                "publicationYear" => "required",
                "publicationDate" => "required",
                "publisher" => "required",
                "DOI" => "required",
                "URL" => "required",
                // 'document' => 'nullable'


            ]
        );

        if ($request->hasFile('document')) {


            // dd($request->file('document'));
            $incomingFields['document'] = $request->file('document')->store('documents', 'public');
        }

        journal::create($incomingFields);
        return back()->with('message', 'Post has been Created successfully!');
    }
}
