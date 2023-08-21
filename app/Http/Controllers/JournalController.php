<?php

namespace App\Http\Controllers;

use App\Models\journal;
use Illuminate\Http\Request;

class JournalController extends Controller
{
    //


    public function show(journal $singleJournal)
    {
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
                "Author" => "required|max:200",
                "journalName" => "required|max:200",
                "issue" => "required|max:200",
                "volume" =>  ["nullable"],
                "publicationYear" => "required",
                "publicationDate" => "required",
                "publisher" => "required|max:200",
                "DOI" => "required|max:200",
                "URL" => "required",
                // 'document' => 'nullable'


            ]
        );

        if ($request->hasFile('document')) {


            // dd($request->file('document'));
            $incomingFields['document'] = $request->file('document')->store('documents', 'public');
        }
        $incomingFields['user_id'] = auth()->id();
        journal::create($incomingFields);
        return back()->with('message', 'Post has been Created successfully!');
    }
}
