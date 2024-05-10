@extends("layout.main")

@section('css')
    <link rel="stylesheet" href="css/batch.css">
@endsection 

@section('title')
    Batch {{{$batch->ke}}}
@endsection 

@section('content')
    <div class="infos">
        <div class="info">
            <div class="title-info">
                <div>Umur</div>
            </div>
            <div class="description-info">{{{$hari}}} Hari</div>
        </div>

        <div class="info">
            <div class="title-info">
                <div>Total Kumulatif Pakan</div>
            </div>
            <div class="description-info">{{{$pakanKumulatif}}} kg</div>
        </div>

        <div class="info">
            <div class="title-info">
                <div>berat rata-rata per tanggal: </div>
                <div>{{{date_format($fcr->created_at, "Y/m/d")}}}</div>
            </div>
            <div class="description-info">{{{$fcr->rata_rata}}} kg</div>
        </div>

        <div class="info">
            <div class="title-info">
                <div>FCR per tanggal:</div>
                <div>{{{date_format($fcr->created_at, "Y/m/d")}}}</div>
            </div>
            <div class="description-info">{{{$fcr->fcr}}}</div>
        </div>

        <div class="info">
            <div class="title-info">
                <div>jumlah</div>
            </div>
            <div class="description-info">{{{$jml}}} ekor</div>
        </div>
    </div>

    <div class="buttons">
        <a href="/beri-pakan-{{{$batch->id}}}" class="btn">beri pakan</a>
        <a href="/timbang-{{{$batch->id}}}" class="btn">timbang</a>
        <a href="/panen-{{{$batch->id}}}" class="btn">panen</a>
        <a href="/mati-{{{$batch->id}}}" class="btn">mati</a>
    </div>
@endsection