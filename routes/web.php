<?php

use App\Livewire\Home;
use App\Livewire\Post\Index as PostIndex;
use App\Livewire\Post\Show as PostShow;
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

Route::get('/', Home::class)->name('home');

Route::get('/post', PostIndex::class)->name('post');
Route::get('/post/{slug}', PostShow::class)->name('post.show');

Route::get('/category', function () {
    return 'Category';
})->name('category');

Route::get('/about', function () {
    return 'About';
})->name('about');
