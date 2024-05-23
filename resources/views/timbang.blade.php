@extends("layout.main")

@section('css')
    <link rel="stylesheet" href="css/timbang.css">
@endsection

@section('title')
    Batch {{{$ke}}}
@endsection

@section('content')
    <form action="/timbang-{{{$ke}}}" method="post">
        @csrf
        <p>Jumlah Ayam</p>
        <p>Berat</p>
        @for ($i = 0; $i < 10; $i++)
            <input type="number" name={{{"jml$i"}}} id={{{"jml$i"}}} value="0">
            <input type="double" name={{{"brt$i"}}} id={{{"brt$i"}}} value="0">
        @endfor
        
        <input type="submit" value="Kirim" class="span-col-2">
    </form>
@endsection 