<?php

namespace App\Http\Controllers;

use App\Models\BatchModel;
use App\Models\PanenModel;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PanenController extends Controller
{
    public function show($id): View {
        return view('panen',[
            'id'=>$id
        ]);
    }

    public function insertPanen($id, Request $req) {
        $panen = new PanenModel();
        $batch = BatchModel::where("id", $id)->get()->first();

        $panen->batch_id = $id;
        $panen->jumlah = $req->jumlah;
        $panen->keterangan = $req->ket;

        $batch->jumlah = $batch->jumlah - $req->jumlah;
        
        $panen->save();
        $batch->save();

        return redirect("/batch-$id");
    }
}
