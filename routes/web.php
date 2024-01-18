<?php

use App\Models\Article;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\GalleryController;
// use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StructureController;
use App\Http\Controllers\WorkplanController;
use App\Http\Controllers\PekanEsportController;
use App\Http\Controllers\ValorantController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::view('/', 'homepage')->name('home');
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/structure', [StructureController::class, 'index'])->name('structure');
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');
Route::get('/article', [ArticleController::class, 'index'])->name('article');
Route::get('/article/{slug}', [ArticleController::class, 'detail'])->name('article.detail');
Route::get('/workplan', [WorkplanController::class, 'index'])->name('workplan');

Route::get('/pekanesport', [PekanEsportController::class, 'index']);
Route::get('/pekanesport/{game}', [PekanEsportController::class, 'game'])->name('pekanesport.game');
// Route::get('/pekanesport/{game}/{form}', [PekanEsportController::class, 'form'])->name('pekanesport.form');
Route::get('/pekanesport/game/{form}', [PekanEsportController::class, 'form'])->name('pekanesport.form');
// Route::get('/pekanesport/pubgm/{form}', [PekanEsportController::class, 'form'])->name('pekanesport.form');
// Route::get('/pekanesport/mobilelegends/{form}', [PekanEsportController::class, 'form'])->name('pekanesport.form');
// Route::get('/pekanesport/freefire/{form}', [PekanEsportController::class, 'form'])->name('pekanesport.form');
// Route::get('/pekanesport/psfootball/{form}', [PekanEsportController::class, 'form'])->name('pekanesport.form');
// Route::get('/pekanesport/magicchess/{form}', [PekanEsportController::class, 'form'])->name('pekanesport.form');
// // Route::get('/pekanesport/dynastones/{form}', [PekanEsportController::class, 'form'])->name('pekanesport.form');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Route::middleware('auth')->group(function () {
//     Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
//     Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
//     Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
// });

// require __DIR__.'/auth.php';

Route::redirect('/login', '/admin')->name('login');
Route::redirect('/register', '/admin')->name('register');
