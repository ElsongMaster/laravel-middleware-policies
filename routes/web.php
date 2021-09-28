<?php

use App\Http\Controllers\UtilisateurController;
use App\Models\User;
use App\Models\Article;
use App\Models\Commentaire;
use App\Models\Contact;
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
    return view('front.pages.home');
})->name('home');
Route::get('/backoffice', function () {
    return view('back.pages.home');
})->middleware(['admin'])->name('back');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['admin'])->name('dashboard');


Route::resource('back/users',UtilisateurController::class)->middleware(['admin']);
Route::resource('back/articles',ArticleController::class)->middleware(['admin']);
Route::resource('back/commentaires',CommentaireController::class)->middleware(['admin']);
Route::resource('back/contacts',ContactController::class)->middleware(['admin']);
require __DIR__.'/auth.php';
