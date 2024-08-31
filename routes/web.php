<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;



// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('home.homepage');
})->name('homepage');


Route::get('/business', function () {
    return view('admin.showpost');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


require __DIR__.'/auth.php';
require __DIR__.'/admin-auth.php';

require __DIR__.'/business_user-auth.php';

Route::get('/user_post', [HomeController::class, 'index'])->middleware('auth')->name('user_post');

Route::post('/userpost', [HomeController::class, 'create_post'])->middleware('auth');

// Route::prefix('admin')->middleware('auth')->group(function () {
Route::get('/create_post', [PostController::class, 'create']);

Route::post('/create', [PostController::class, 'store']);
// });

Route::get('/show_posts', [PostController::class, 'index']);

Route::get('/delete_post/{$id}', [PostController::class, 'destroy']);
