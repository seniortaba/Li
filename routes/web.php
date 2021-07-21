<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BaseController;
use App\Http\Controllers\PostsController;

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


Route::get('/', [PostsController::class, 'getBases'])->name('home');

Route::get('/base', [PostsController::class, 'getPosts'])->name('getBasePost');
Route::get('/download_csv', [BaseController::class, 'download_csv'])->name('download_csv');
