<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class BerandaController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $idUser = auth()->user()->id;
        
        return view('beranda');
    }

}