<?php

namespace App\Http\Controllers;

use App\Models\BatchModel;
use App\Models\FCRModel;
use App\Models\PakanModel;
use Illuminate\Http\Request;

class TimbangController extends Controller
{
    public function show($id) {
        return view("timbang",[
            "batchId"=>$id,
        ]);
    }

    public function insertTimbang($id, Request $req){
        $pakans = PakanModel::all();
        $batch = BatchModel::where("id", $id)->get()->first();
        $kumulatifPakan = 0;

        foreach ($pakans as $pakan) {
            $kumulatifPakan = $kumulatifPakan + $pakan->pagi;
            $kumulatifPakan = $kumulatifPakan + $pakan->sore;
        }

        $rataRataPakan = $kumulatifPakan/$batch->jumlah;


        $jml = array(
            $req->jml0,
            $req->jml1,
            $req->jml2,
            $req->jml3,
            $req->jml4,
            $req->jml5,
            $req->jml6,
            $req->jml7,
            $req->jml8,
            $req->jml9
        );

        $brt = array(
            $req->brt0,
            $req->brt1,
            $req->brt2,
            $req->brt3,
            $req->brt4,
            $req->brt5,
            $req->brt6,
            $req->brt7,
            $req->brt8,
            $req->brt9,
        );

        $totalAyam = array_sum($jml);
        $totalBrt = array_sum($brt);
        $beratRataRata = $totalBrt/$totalAyam;

        $fcr = new FCRModel();
        $fcr->batch_id = $id;
        $fcr->rata_rata = $beratRataRata;
        $fcr->jml_ayam = $totalAyam;
        $fcr->fcr = $rataRataPakan/$beratRataRata;
        $fcr->save();

        return redirect("/batch-$id");
    }
}
