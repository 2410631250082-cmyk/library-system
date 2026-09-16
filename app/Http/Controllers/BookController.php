<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
    {
        $books = [
            ['judul' => 'Pemrograman PHP', 'penulis' => 'Budi Santoso', 'tahun' => 2019],
            ['judul' => 'Laravel untuk Pemula', 'penulis' => 'Andi Wijaya', 'tahun' => 2021],
            ['judul' => 'Basis Data', 'penulis' => 'Citra Dewi', 'tahun' => 2020],
            ['judul' => 'Algoritma dan Pemrograman', 'penulis' => 'Eko Prasetyo', 'tahun' => 2018],
            ['judul' => 'Pemrograman Berorientasi Objek', 'penulis' => 'Dewi Lestari', 'tahun' => 2022],
        ];

        return view('books.index', compact('books'));
    }

    public function show($id)
    {
        return view('books.show', compact('id'));
    }
}