@extends('layouts.app')

@section('title', 'Edit Buku')

@section('content')
    <h2>Edit Buku</h2>

    <form action="{{ route('books.update', $book) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Judul:</label><br>
        <input type="text" name="title" value="{{ $book->title }}"><br><br>

        <label>Penulis:</label><br>
        <input type="text" name="author" value="{{ $book->author }}"><br><br>

        <label>Tahun Terbit:</label><br>
        <input type="number" name="year" value="{{ $book->year }}"><br><br>

        <label>Stok:</label><br>
        <input type="number" name="stock" value="{{ $book->stock }}"><br><br>

        <button type="submit">Update</button>
    </form>
@endsection