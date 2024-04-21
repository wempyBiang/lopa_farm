@extends("layout.main")

@section('css')
    <link rel="stylesheet" href="css/dashboard.css">
@endsection

@section('title')
    Dashboard
@endsection

@section('content')
    <div class="batchs">
        <a  href="/batch" class="btn"> batch 1 </a>
        
        <a href="/batch" class="btn"> batch 2 </a>
        <a href="/batch" class="btn"> batch 3 </a>
        <a href="/batch" class="btn"> batch 4 </a>
        
        <a href="/tambah" class="btn">tambah</a>

    </div>
@endsection