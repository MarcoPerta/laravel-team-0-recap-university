<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

// gruppo di rotte per la parte di backoffice
Route::middleware('auth')
        ->namespace('Admin')
        ->prefix('admin')
        ->name('admin.')
		->group(function() {
			// pagina di atterraggio dopo il login (con il prefisso, l'url è '/admin')
		    Route::get('/', 'HomeController@index')->name('index');
            Route::resource('/courses', CourseController::class);
            Route::resource('/exams', ExamController::class);
            Route::resource('/teachers', TeacherController::class);
});

// rotta di fallback per la parte di frontoffice
Route::get("{any?}", function() {
    // Torna la view in blade con all'interno il div #root
    return view("guest.home");
})->where("any", ".*");
