@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <h2>{{ $title }}</h2>
    <p>{{ $description }}</p>
    <p>Jumlah Buku: {{ $totalBooks }}</p>
    <p>Jumlah Member: {{ $totalMembers }}</p>
    <p>Jumlah Kategori: {{ $totalCategories }}</p>
@endsection