<?php

namespace App\Http\Controllers;

use App\Models\BatchModel;
use App\Models\PanenModel;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PanenController extends Controller
{
    public function show($ke): View {
        return view('panen',[
            'ke'=>$ke
        ]);
    }

    public function insertPanen($ke, Request $req) {
        $panen = new PanenModel();
        $batch = BatchModel::where("ke", $ke)->get()->first();

        $panen->batch_id = $batch->id;
        $panen->jumlah = $req->jumlah;
        $panen->keterangan = $req->ket;

        $batch->jumlah = $batch->jumlah - $req->jumlah;
        
        $panen->save();
        $batch->save();

        return redirect("/batch-$ke");
    }
}
