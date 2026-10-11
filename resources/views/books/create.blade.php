@extends('layouts.app')

@section('title', 'Tambah Buku')

@section('content')
    <h2>Tambah Buku</h2>

    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        <label>Judul:</label><br>
        <input type="text" name="title"><br><br>

        <label>Penulis:</label><br>
        <input type="text" name="author"><br><br>

        <label>Tahun Terbit:</label><br>
        <input type="number" name="year"><br><br>

        <label>Stok:</label><br>
        <input type="number" name="stock"><br><br>

        <button type="submit">Simpan</button>
    </form>
@endsection