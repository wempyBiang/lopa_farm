@extends('layout.main')

@section('css')
    <link rel="stylesheet" href="css/mati.css">
@endsection

@section('title')
    Batch {{{$ke}}}
@endsection 

@section('content')
<form action="/mati-{{{$ke}}}" method="post">
    @csrf
    <div>
        <label for="jumlah">jumlah:</label>
        <input type="number" name="jumlah" id="jumlah" placeholder="Jumlah Ayam Mati">
    </div>
    <button type="submit">Kirim</button>
</form>
@endsection