<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RumahController extends Controller
{
    // Menampilkan form
    public function index()
    {
        return view('form');
    }

    // Menerima dan mengirim data message ke home.blade.php
    public function submit(Request $request)
    {
        // Validasi input
        $request->validate([
            'message' => 'required|string|max:255',
        ]);

        // Ambil input 'message' dari request
        $dataMessage = $request->input('message');

        // Kirim data message ke view home.blade.php
        return view('home', ['message' => $dataMessage]);
    }
}
