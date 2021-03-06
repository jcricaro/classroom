<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('register', 'UserController@register');

Route::group(['middleware' => 'auth:api'], function() {
    Route::get('me', function(Request $request) {
        return $request->user();
    });

    //teacher stuff
    Route::group(['prefix' => 'teacher', 'namespace' => 'Teacher'], function() {
        Route::get('lectures', 'LectureController@index');
        Route::post('lectures', 'LectureController@store');
        Route::get('quizzes', 'QuizController@index');
        Route::get('quizzes/{quiz}', 'QuizController@show');
        Route::post('quizzes', 'QuizController@store');
        Route::post('meetings', 'MeetingController@store');
    });

    //student stuff
    Route::group(['prefix' => 'student', 'namespace' => 'Student'], function() {
        Route::get('lectures', 'LectureController@index');
        Route::get('quizzes', 'QuizController@index');
        Route::get('quizzes/{quiz}', 'QuizController@show');
        Route::put('quizzes/{quiz}', 'QuizController@update');
        Route::get('attendances', 'AttendanceController@index');
        Route::get('meetings', 'MeetingController@index');
        Route::post('meetings/{meeting}', 'MeetingController@store');
    });
});