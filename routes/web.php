<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\form;

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

Route::get('/', function () {
    return view('question1');
});

Route::get('/', [form::class, 'createForm']);
Route::post('/', [form::class, 'q1Form'])->name('q1.form');

Route::get('/q2', function () {
    return view('question2');
});
Route::get('/q3', function () {
    return view('question3');
});
Route::get('/q4', function () {
    return view('question4');
});
Route::get('/q5', function () {
    return view('question5');
});
Route::get('/q6', function () {
    return view('question6');
});
Route::get('/q7', function () {
    return view('question7');
});
