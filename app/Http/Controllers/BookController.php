<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        // Array data buku
        $books = [
            ['title' => '7 Prajurit Bapak', 'author' => 'Wulan Nurmalia', 'year' => 2022],
            ['title' => 'Dear J', 'author' => 'L.Lullaby', 'year' => 2017],
            ['title' => 'Samuel', 'author' => 'Itakrn', 'year' => 2021],
            ['title' => '00.00', 'author' => 'Ameylia Falensia', 'year' => 2021],
            ['title' => 'Azzamine', 'author' => 'Sophie Aulia', 'year' => 2022],
            ['title' => 'Bandung Menjelang Pagi', 'author' => 'Brian Khrisna', 'year' => 2024],
        ];

        // Kirim array ke view
        return view('book', ['books' => $books]);
    }
}
