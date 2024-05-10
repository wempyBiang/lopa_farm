<?php

namespace App\Http\Controllers;

use App\Models\BatchModel;
use App\Models\MatiModel;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class MatiController extends Controller
{
    public function show($id): View{

        return view('mati',[
            "id"=>$id
        ]);
    }

    public function insertMati($id, Request $req) {
        $mati = new MatiModel();
        $batch = BatchModel::where("id", $id)->get()->first();

        $mati->jumlah = $req->jumlah;
        $mati->batch_id = $id;
        $batch->jumlah = $batch->jumlah - $req->jumlah;

        $mati->save();
        $batch->save();

        return redirect("/batch-$id");
    }
}
