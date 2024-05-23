<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Playlist;

class PlaylistController extends Controller
{
    public function index() {
        $playlists = Playlist::all();
        return view('playlists.index', ['playlists' => $playlists]);
    }
}
