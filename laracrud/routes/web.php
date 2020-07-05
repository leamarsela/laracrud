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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('questions.data');
});


Route::get('/questions', 'QuestionsController@index');
Route::get('/questions/create', 'QuestionsController@create');
Route::get('/questions/{question}', 'QuestionsController@show');
Route::post('/questions', 'QuestionsController@store');
Route::delete('/questions/{question}', 'QuestionsController@destroy');
Route::get('/questions/{question}/edit', "QuestionsController@edit");
Route::patch('/questions/{question}', 'QuestionsController@update');


Route::post('/answers/{answer}', 'AnswersController@store');
Route::get('/answers/{answer}', 'AnswersController@index');
Route::get('/answers/qna/{id}', 'AnswersController@show');  //id answer dan id question tidak sama.
Route::delete('/answers/{answer}', 'AnswersController@destroy');
Route::get('/answers/{answer}/edit', 'AnswersController@edit');
Route::patch('/answers/{answer}', 'AnswersController@update');
