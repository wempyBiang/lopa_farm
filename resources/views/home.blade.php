@extends("layout.main")

@section('css')
    <link rel="stylesheet" href="css/dashboard.css">
@endsection

@section('title')
    Dashboard
@endsection

@section('content')
    <div class="buttons">
        @foreach ($batchs as $batch)
            <a href="/batch-{{{$batch->ke}}}" class="btn"> batch {{{$batch->ke}}} </a>
        @endforeach
        
        <a href="/tambah-batch" class="btn">tambah</a>

    </div>
@endsection