<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        return 'Selamat Datang';
    }
    public function about(){
        return '2241760070 Fakhar Reza Alamsyah';
    }
    public function articles($id){
        return 'Halaman Artikel dengan Id '.$id;
    }
}
