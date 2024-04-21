@extends("layout.main")

@section('css')
    <link rel="stylesheet" href="css/batch.css">
@endsection 

@section('title')
    Batch 1
@endsection 

@section('content')
    <div class="infos">
        <div class="info">
            <div class="title-info">
                <div>Umur</div>
            </div>
            <div class="description-info">20 Hari</div>
        </div>

        <div class="info">
            <div class="title-info">
                <div>Total Kumulatif Pakan</div>
            </div>
            <div class="description-info">150 kg</div>
        </div>

        <div class="info">
            <div class="title-info">
                <div>berat rata-rata per tanggal: </div>
                <div>21/4/2024</div>
            </div>
            <div class="description-info">1.2 kg</div>
        </div>

        <div class="info">
            <div class="title-info">
                <div>FCR per tanggal:</div>
                <div>21/4/2024</div>
            </div>
            <div class="description-info">1.5</div>
        </div>

        <div class="info">
            <div class="title-info">
                <div>jumlah</div>
            </div>
            <div class="description-info">100 ekor</div>
        </div>
    </div>

    <div class="butons">
        
    </div>
@endsection