<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Home');
});

Route::get('/students',"App\Http\Controllers\StudentsController@index");

Route::get('/students/create',"App\Http\Controllers\StudentsController@create");

Route::post('/students/create',"App\Http\Controllers\StudentsController@store");

Route::get('/students/edit{id}',"App\Http\Controllers\StudentsController@edit")->name('student.edit');

Route::post('/students/edit{id}',"App\Http\Controllers\StudentsController@update")->name('student.update');

Route::get('/students/delete{id}',"App\Http\Controllers\StudentsController@destroy")->name('student.destroy');

Route::get('/students/show{id}',"App\Http\Controllers\StudentsController@show")->name('student.show');
