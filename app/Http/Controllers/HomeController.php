<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $data['mahasiwa'] = Mahasiswa::latest()->get();
        $data['title'] = 'Home';
        return view('home', $data);
    }
}
