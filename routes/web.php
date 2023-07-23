<?php

use App\Http\Controllers\BookControllers;
use App\Http\Controllers\ConferenceController;
use App\Http\Controllers\JournalController;
use App\Models\BookChapter;
use App\Models\journal;
use App\Models\conference;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


// Route::get('/', function () {
//     return view('Forms.BookChapter');
// });

// Route::get('/conference', function () {
//     return view('Forms.conferencePaper');
// });

// Route::get('/allpost', function () {
//     $journals = journal::all();
//     $bookChapters = BookChapter::all();
//     $conferencePapers = conference::all();
//     // $conferencePapers::conference::all();


//     return view('allPosts', ['journals' => $journals, 'bookChapters' => $bookChapters, 'conferencePapers' => $conferencePapers]);
// });



Route::get('/', function () {
    $journals = journal::latest()->paginate(8);
    $bookChapters = BookChapter::all();
    $conferencePapers = conference::all();
    // $conferencePapers::conference::all();


    return view('index', ['journals' => $journals, 'bookChapters' => $bookChapters, 'conferencePapers' => $conferencePapers]);
    // return view('index', ['journals' => $journals]);
});






Route::get('/journal', function () {
    // $journals = journal::all();


    return view('Forms.journalArticle');
});

Route::get('/journal/{singleJournal}', [JournalController::class, 'show']);


// Route::get('/', function () {
//     return view('index');
// });


// Route::get('/Profile', function () {
//     return view('Profile.profile');
// });

Route::get('/bookChapter', function () {
    return view('Forms.BookChapter');
});

Route::post('/createBookPost', [BookControllers::class, 'createBookPost']);



Route::get('/conference', function () {
    return view('Forms.conferencePaper');
});

Route::post('/createConferencePaper', [ConferenceController::class, 'createConferencePaper']);


Route::post('/createJournalartical', [JournalController::class, 'createJournalartical']);
