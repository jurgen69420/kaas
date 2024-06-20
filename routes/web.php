<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// als laravel een nieuwe route niet direct kan vinden, 
// ververs dan de route cache met > php artisan route:cache 
// en probeer het nog eens
Route::get('/artists', [App\Http\Controllers\ArtistController::class, 'index'])->name('artists');
//Route::get('/artists', function () {
    //return view('artists/index');
    
//})->name("artists");





Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

route ::get('/songs', [App\Http\Controllers\SongController::class, 'index'])->name('songs');
route ::get('/playlists', [App\Http\Controllers\PlaylistController::class, 'index'])->name('playlists');
Route::get('/session/add/{song_id}', function($song_id) {

    $items = Array();     //  [1, 4, 6]
    if (! Session::exists('playlist')) {
        Session::put('playlist', $items);
    } else {
        $items = Session::get('playlist');
    }
    array_push($items, $song_id);
    Session::put('playlist', $items);
    Session::save();
});

//route ::get('/mail', [App\|Http\Controllers\MailController::class, 'Send'])->name('mail.send//');

require __DIR__.'/auth.php';
