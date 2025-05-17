<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }
    public function index0()
    {
        return view ('home/welcome_message');
    }
    public function index2()
    {
        $pengguna = "Aku Siapa";
        $list_kota = ["Jakarta", "Bandung", "Surabaya", "Yogyakarta", "Bali"]; // Daftar kota
        
        // Mengirim kedua variabel ke view
        return view('home/welcome_message', compact('pengguna', 'list_kota'));
        
    }
}