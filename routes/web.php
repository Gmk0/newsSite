<?php

use Illuminate\Support\Facades\Route;

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


Route::get('/',\App\Livewire\Web\Home::class)->name('home');

//Route::get('/news/{slug}',\App\Livewire\Web\OneNews::class)->name('news');

Route::get('/categories/{category}/{slug}', \App\Livewire\Web\OneNews::class)->name('oneNews');


Route::get('/categories/{category}', \App\Livewire\Web\ByCategory::class)->name('categoriesOne');

Route::get('/categories', \App\Livewire\Web\Categories::class)->name('categories');

Route::get('/apropos-de-nous', \App\Livewire\Web\About::class)->name('apropos');
Route::get('/contact', \App\Livewire\Web\Contact::class)->name('contact');

Route::get('/search/{word?}', \App\Livewire\Web\Recherche::class)->name('search');
//Route::get('/categories', \App\Livewire\Web\AllCategory::class)->name('categories');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
