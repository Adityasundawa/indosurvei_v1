<?php

use App\Http\Controllers\GoogleSocialiteController;
use App\Http\Controllers\IndoSurvei;
use App\Http\Controllers\UserController;
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

Route::get('/', function () {
    return view('indosurvei/index');
});

Route::get('auth/google', [GoogleSocialiteController::class, 'redirectToGoogle']);
Route::get('callback/google', [GoogleSocialiteController::class, 'handleCallback']);
Route::get('share/{id}', [IndoSurvei::class, 'share'])->name('share');
Route::post('/answer_survei', [IndoSurvei::class, 'answer_survei'])->name('answer.survei');
Route::controller(IndoSurvei::class)->group(function () {
    Route::get('/survei/add', 'indosurvei_add')->name('indosurvei.add');
    // Route::get('/{slug}', 'indosurvei_slug')->name('indosurvei.slug');
    // POST METHOD
    Route::post('/survei/action/add', 'indosurvei_action_add')->name('indosurvei.action_add');
    Route::post('/survei/action/add', 'indosurvei_action_add')->name('indosurvei.action_add');
    
    
});
Route::get('/dashboard2', function () {
    return view('indosurvei/dashboard');
});
Route::get('/list-survey2', function () {
    return view('indosurvei/list-survey');
});
Route::get('/detail', function () {
    return view('indosurvei/detail');
});
Route::get('/preview', function () {
    return view('indosurvei/preview');
});



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
  
    Route::get('/redirect', function () {
        return view('auth.redirect');
    });
});



Route::group(['middleware' => 'auth.check'], function () {
    Route::get('dashboard', [UserController::class, 'dashboard'])->name('dashboard');
    Route::get('list-survey', [UserController::class, 'list_survey'])->name('list-survey');
    Route::get('edit-survei/{id}', [UserController::class, 'edit_survei'])->name('edit.survei');
    Route::post('dashboard/action/survei/{id}', [UserController::class, 'dashboard_action_survei'])->name('dashboard.action.survei');


    Route::post('action/survey/question/', [UserController::class, 'action_survey'])->name('action.survey.question');



    Route::get('/ajax/get_edit', [UserController::class, 'get_edit'])->name('edit.get_edit');
    Route::get('/ajax/get_edit_pilhan_ganda', [UserController::class, 'get_edit_pilhan_ganda'])->name('edit.get_edit_pilhan_ganda');
    

    Route::delete('/delete/multiple_question/{id}',[UserController::class, 'delete_multiple_question'])->name('delete.delete_multiple_question');
    Route::delete('/delete/short_question/{id}',[UserController::class, 'delete_short_question'])->name('delete.delete_short_question');
    Route::delete('/delete/survei/{id}',[UserController::class, 'delete_survei_all'])->name('delete.delete_survei_all');
    Route::patch('/edit/short_question/{id}', [UserController::class, 'update_short_question'])->name('edit.short_question');
    Route::post('/edit/multiple_question/{id}', [UserController::class, 'update_multiple_question'])->name('edit.multiple_question');

});
