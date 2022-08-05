<?php

use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\VarticleController;
use App\Http\Controllers\Admin\VideoController;
use App\Http\Controllers\Admin\DepartmentController;
use App\Http\Controllers\Admin\AdministratorController;
use App\Http\Controllers\Admin\CallbackController;
use Illuminate\Support\Facades\Route;


// viws Litsey

use App\Http\Controllers\IndexController;
use App\Http\Controllers\ArticlleController;
use App\Http\Controllers\AdministrationController;
use App\Http\Controllers\ChairsController;
use App\Http\Controllers\ForeignController;
use App\Http\Controllers\To_entrantsController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\VarticlleController;
use App\Http\Controllers\About_inController;
use App\Http\Controllers\SearchController;


// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware(['role:user'])->prefix('admin_panel')->group(function () {
        Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('homeAdmin');
        Route::resource('slider', SliderController::class);
        Route::resource('article', ArticleController::class);
        Route::resource('varticle', VarticleController::class);
        Route::resource('video', VideoController::class);
        Route::resource('department', DepartmentController::class);
        Route::resource('administrator', AdministratorController::class);
        Route::resource('callback', CallbackController::class);
});

//views Litsey

Route::get('/', [IndexController::class, 'index']);
Route::get('articles', [ArticlleController::class, 'list'])->name('articles');
Route::get('articles/{id}', [ArticlleController::class, 'show'])->name('article');
Route::get('varticles', [VarticlleController::class, 'list'])->name('varticles');
Route::get('varticles/{id}', [VarticlleController::class, 'show'])->name('varticle');
Route::get('/administration', [AdministrationController::class, 'index']);
Route::get('/chairs', [ChairsController::class, 'index']);
Route::get('/chairs/{department}', [ChairsController::class, 'show'])->name('chairs.show');
Route::get('/to_entrants', [To_entrantsController::class, 'index']);
Route::get('/contact', [ContactController::class, 'index']);
Route::get('/about_in', [About_inController::class, 'index']);
Route::get('/search', [SearchController::class, 'search'])->name('search');
