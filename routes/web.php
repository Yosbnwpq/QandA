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

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnswerController;
use App\Http\Controllers\QuestionController;


Route::get('/', [QuestionController::class, 'index']) -> name('questions');
Route::get('/questions', [QuestionController::class, 'index']) -> name('questions');
Route::post('/questions', [QuestionController::class, 'store']);

Route::get('/questions/{question}', [QuestionController::class, 'show']) -> name('question.show');

Route::post('/questions/{question}/answers', [AnswerController::class, 'store']) -> name('question.answers');

