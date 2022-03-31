<?php

namespace App\Http\Controllers;

use App\Models\Pengaturan;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    //    
    public function index() {

        $pengaturantitle = Pengaturan::pluck('title','key');
        $pengaturanisi = Pengaturan::pluck('value','key');

        return view('frontend.beranda', compact('pengaturantitle','pengaturanisi'));
    }
}
