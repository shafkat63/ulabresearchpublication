<?php

use App\Http\Controllers\BookControllers;
use App\Http\Controllers\ConferenceController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\JournalController;
use App\Http\Controllers\UserController;
use App\Models\BookChapter;
use App\Models\journal;
// use App\Models\User;
use App\Models\conference;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

use function Termwind\render;

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
    // $all = journal::join('BookChapter')->get();
    $journals = journal::latest()->paginate(8);
    $bookChapters = BookChapter::latest()->paginate(8);
    $conferencePapers = conference::latest()->paginate(8);
    // $conferencePapers::conference::all();
    // $users = User::join('journals', 'journals.user_id', '=', 'users.id')->join("BookChapter", "book_chapters.user_id", "=", "users.id")->get();
//    return dd($users);
    return view('index', ['journals' => $journals, 'bookChapters' => $bookChapters, 'conferencePapers' => $conferencePapers]);
    // return view('index', ['journals' => $journals]);
});


// $users = User::join('posts', 'posts.user_id', '=', 'users.id')
//               ->join('comments', 'comments.post_id', '=', 'posts.id')
//               ->get(['users.*', 'posts.descrption']);



Route::get('/journal', function () {
    // $journals = journal::all();

    return view('Forms.journalArticle');
});

Route::get('/journal/{singleJournal}', [JournalController::class, 'show']);

Route::get('/bookchapter/{singleBook}', [BookControllers::class, 'show']);

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


Route::get('auth/google', [GoogleController::class, 'loginWithGoogle']);
Route::any('auth/google/callback', [GoogleController::class, 'callbackFromGoogle'])->name('callback');




Route::get('/register', [UserController::class, 'create'])->middleware('guest');

Route::post('/users', [UserController::class, 'store']);

Route::get('/login', [UserController::class, 'login'])->name('login')->middleware('guest');
Route::post('/users/authenticate', [UserController::class, 'authenticate']);

// Route::post('/register', [UserController::class, 'register']);
Route::get('/Profile', function () {
    return view('Users.profile');
});
Route::post('/logout', [UserController::class, 'logout'])->middleware('auth');