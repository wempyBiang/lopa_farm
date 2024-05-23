@extends('layout.main')

@section('title')
    Batch {{{$ke}}}
@endsection

@section('css')
    <link rel="stylesheet" href="css/panen.css">
@endsection

@section('content')

    <form action="/panen-{{{$ke}}}" method="post">
        @csrf
        <div>
            <label for="jumlah">jumlah:</label>
            <input type="number" name="jumlah" id="jumlah"  placeholder="Jumlah Ayam Dipanen">
        </div>
        <div>
            <label for="jumlah">keterangan:</label>
            <input type="text" name="ket" id="ket"  placeholder="Kenterangan">
        </div>
        <button type="submit">Kirim</button>
    </form>
@endsection