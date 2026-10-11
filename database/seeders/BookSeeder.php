<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    public function run(): void
    {
        Book::create(['title' => 'Pemrograman PHP', 'author' => 'Budi Santoso', 'year' => 2019, 'stock' => 5]);
        Book::create(['title' => 'Laravel untuk Pemula', 'author' => 'Andi Wijaya', 'year' => 2021, 'stock' => 3]);
        Book::create(['title' => 'Basis Data', 'author' => 'Citra Dewi', 'year' => 2020, 'stock' => 7]);
        Book::create(['title' => 'Algoritma dan Pemrograman', 'author' => 'Eko Prasetyo', 'year' => 2018, 'stock' => 4]);
        Book::create(['title' => 'Pemrograman Berorientasi Objek', 'author' => 'Dewi Lestari', 'year' => 2022, 'stock' => 6]);
    }
}