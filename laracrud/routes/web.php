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


Route::post('/answers/{id}', 'AnswersController@store');
Route::get('/answers/{id}', 'AnswersController@index');
Route::get('/answers/qna/{id}', 'AnswersController@show');

// Route::post('/answers', 'AnswersController@store');
// Route::get('/answers/{question_id}', 'AnswersController@create');