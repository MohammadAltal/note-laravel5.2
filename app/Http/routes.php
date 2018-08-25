<?php

Route::get('/', function () {
    return view('welcome');
});


Route::get('pages', 'PageController@show');

Route::get('pages/{page}', 'PageController@onepage');

Route::post('pagesstore', 'PageController@store');

Route::get('pages/{page}/delete', 'PageController@delete');

Route::get('pages/{page}/deleteall', 'PageController@deleteall');


Route::post('pages/{page}/notesstore', 'NoteController@store');

Route::get('note/{note}/edit', 'NoteController@edit');

Route::post('note/{note}/update', 'NoteController@update');

Route::get('note/{note}/delete', 'NoteController@delete');

