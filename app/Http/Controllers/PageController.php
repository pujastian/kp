<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PageController extends Controller
{
    public function Profil()
    {
        return view('depan/profil');
    }

    public function rekomendasi()
    {
        return view('depan/rekomendasi');
    }

    public function index()
    {
        $profil = DB::table('profil')->get();
        return view('/depan/profil', ['profil' => $profil]); 
    }
}
