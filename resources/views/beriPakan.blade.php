@extends("layout.main")

@section('css')
    <link rel="stylesheet" href="css/beriPakan.css">
@endsection

@section('title')
    Batch {{{$ke}}}
@endsection 

@section('content')
    <div class="info-pakan">
        <table>
            <tr>
                <th rowspan="2">Hari ke-</th>
                <th colspan="2">pakan</th>
            </tr>
            <tr>
                <th>Pagi</th>
                <th>Sore</th>
            </tr>

            @foreach ($pakans as $pakan)
                <tr>
                    <td>{{{$pakan->day}}}</td>
                    <td>{{{$pakan->pagi}}}</td>
                    <td>{{{$pakan->sore}}}</td>
                </tr>
            @endforeach
        </table>
    </div>

    <form action="/beri-pakan-{{{$ke}}}" method="post">
        @csrf
        <p>Waktu</p>
        <div>
            <input type="radio" id="pagi" name="waktu" value="pagi">
            <label for="pagi">Pagi</label><br>
            <input type="radio" id="sore" name="waktu" value="sore">
            <label for="sore">Sore</label><br>
        </div>

        <label for="jmlPakan">Jumlah Pakan</label>
        <input type="number" step="0.01" name="jmlPakan" id="jmlPakan">

        <input type="submit" value="Kirim" class="span-col-2">
    </form>
@endsection