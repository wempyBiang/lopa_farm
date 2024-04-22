@extends('layout.main')

@section('title')
    Kandang 1
@endsection

@section('css')
    <link rel="stylesheet" href="css/panen.css">
@endsection

@section('content')

    <form action="/panen" method="post">
        @csrf
        <div>
            <label for="jumlah">jumlah:</label>
            <input type="number" name="jumlah" id="jumlah"  placeholder="Jumlah Ayam Dipanen">
        </div>
        <button type="submit">Kirim</button>
    </form>
@endsection