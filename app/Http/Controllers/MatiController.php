<?php

namespace App\Http\Controllers;

use App\Models\BatchModel;
use App\Models\MatiModel;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class MatiController extends Controller
{
    public function show($ke): View{
        
        return view('mati',[
            "ke"=>$ke
        ]);
    }

    public function insertMati($ke, Request $req) {
        $mati = new MatiModel();
        $batch = BatchModel::where("ke", $ke)->get()->first();

        $mati->jumlah = $req->jumlah;
        $mati->batch_id = $batch->id;
        $batch->jumlah = $batch->jumlah - $req->jumlah;

        $mati->save();
        $batch->save();

        return redirect("/batch-$ke");
    }
}
