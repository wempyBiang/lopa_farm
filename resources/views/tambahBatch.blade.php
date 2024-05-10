@extends("layout.main")

@section('css')
    <link rel="stylesheet" href="css/tambahBatch.css">
@endsection

@section('title')
    Tambah Batch
@endsection

@section('content')
    <form action="/tambah-batch" method="post">
        @csrf

        <div>
            <p>Batch Terakhir: {{{$lastBatchNumber}}}</p>
        </div>
        <div>
            <label for="batch">Batch ke:</label>
            <input type="number" name="batch" id="batch" placeholder="{{{$lastBatchNumber+1}}}">
        </div>

        <div>
            <label for="jml">Jumlah Ayam:</label>
            <input type="number" name="jml" id="jml" placeholder="Jumlah Ayam">
        </div>

        <div>
            <label for="jenisAyam">Jenis Ayam:</label>
            <select name="jenisAyam" id="jenisAyan">
                @foreach ($jenisAyam as $jenis)
                    <option value="{{{$jenis->id}}}">{{{$jenis->nama}}}</option>                
                @endforeach
            </select>
        </div>
        
        <button type="submit">Kirim</button>
    </form>
@endsection