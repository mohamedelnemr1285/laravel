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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'libraryhomecontroller@index')->name('face');

//Route::get('/create', 'studentcontroller@create')->name('home'); model
//
//Route::post('/save', 'studentcontroller@save')->name('save');  model

Route::get('/save', 'studentcontroller@index')->name('home');
Route::post('/save', 'studentcontroller@save')->name('save');

Route::get('/book', 'bookcontroller@index')->name('book');
Route::post('/book', 'bookcontroller@upload')->name('upload');

//Route::get('/borrow','studentcontroller@index')->name('index');
//Route::post('/borrowborrow/{$id}/edit','studentcontroller@edit')->name('borrow');
//Route::patch('/borrow/{$id}/update','studentcontroller@update')->name('update');
//

//Route::get('/borrow','borrowcontroller@show')->name('show');

//Route::resource('students','studentscontroller');

//Route::resource('book','bookcontroller');

Route::get('/borrow','borrowcontroller@index')->name('borrowed');
Route::get('/borrow/{$student}/edit','borrowcontroller@edit')->name('edit');
Route::patch('/borrow/{$student}','borrowcontroller@update')->name('update');
//Route::post('/borrowed','borrowcontroller@store')->name('store');


//Route::resource('/book','libraryhomecontroller');

Route::get('/books','bookcontroller@show');
Route::get('/books/{$library}','bookcontroller@destroy')->name('delete');

Route::get('message',function (){
    Mail::to('mohamed@library.com')->send(new \App\Mail\testmail());

    return'you send message' ;
});
