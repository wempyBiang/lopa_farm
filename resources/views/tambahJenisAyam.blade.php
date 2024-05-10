@extends("layout.main")

@section('css')
    <link rel="stylesheet" href="css/tambahBatch.css">
@endsection

@section('title')
    Tambah Jenis Ayam
@endsection

@section('content')
    <form action="/tambah-jenis-ayam" method="post">
        @csrf
        <div>
            <label for="jenis">Jenis Ayam: </label>
            <input type="text" name="jenis" id="jenis" placeholder="Jenis Ayam">
        </div>
        <button type="submit">Kirim</button>
    </form>
@endsection