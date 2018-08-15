<?php


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Questions
Route::group(['middleware' => ['auth'], 'prefix' => 'questions'], function () {
    Route::get('create', 'QuestionController@create')->name('question.create');
    Route::post('/', 'QuestionController@store')->name('question.store');
});

// Categories
Route::get('category/{category}', 'CategoryController@show')->name('category.show');
Route::get('category/{category}/question/{question}', 'QuestionController@show')->name('question.show');