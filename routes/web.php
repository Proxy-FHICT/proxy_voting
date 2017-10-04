<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

use App\Teacher;
// use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\SessionController;
use Illuminate\Http\Request;

Route::get('/', function (Request $request) {
    // $teachers = Teacher::orderBy('name','asc')->get();
    // $request->session()->flush();
    $ses = new SessionController;
    $ses->refresh($request);
    return view('welcome');
});

Route::post('/newvote', ['uses' => 'VoteController@store'])->middleware('fin');

Route::post('/voting', ['uses' => 'VotingController@start']);

Route::get('/next', ['uses' => 'VotingController@next'])->middleware('fin');

Route::get('/qual/{nr}',['uses'=>'QualificationController@show'])->middleware('fin');

Route::post('/record',['uses'=>'VoteController@create'])->middleware('fin');

Route::get('/finish',['uses'=>'VotingController@finish'])->middleware('fin');

Route::post('/submit',['uses'=>'VoteController@store']);

Route::get('/thanks', function(){
    return view('bye');
});


Route::get('/results',['uses'=>'VoteController@showResult']);