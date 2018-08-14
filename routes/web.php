<?php


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('category/{category}', 'CategoryController@show')->name('category.show');
Route::get('category/{category}/question/{question}', 'QuestionController@show')->name('question.show');