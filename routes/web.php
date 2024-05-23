<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

route ::get('/songs', [App\Http\Controllers\SongController::class, 'index'])->name('songs');
route ::get('/playlists', [App\Http\Controllers\PlaylistController::class, 'index'])->name('playlists');

//route ::get('/mail', [App\|Http\Controllers\MailController::class, 'Send'])->name('mail.send//');

require __DIR__.'/auth.php';
