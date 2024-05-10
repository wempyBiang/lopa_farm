<?php

namespace App\Http\Controllers;

use App\Models\BatchModel;
use App\Models\FCRModel;
use App\Models\JenisModel;
use App\Models\PakanModel;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class BatchController extends Controller
{
    public function show($id): View{
        dd(date("Y-m-d"));
        $batch = BatchModel::where("id", $id)->get()->first();
        $hari = (int) ((strtotime(date("Y-m-d")) - strtotime(date_format($batch->created_at, "Y-m-d"))) / 84600) + 1 ;
        $jml = $batch->jumlah;
        $pakans = PakanModel::where("batch_id", $id)->get();
        $pakanKumulatif = 0;

        $fcr = FCRModel::where("batch_id", $id)->get()->last();
            
        foreach ($pakans as $pakan) {
            $pakanKumulatif = $pakanKumulatif + $pakan->pagi;
            $pakanKumulatif = $pakanKumulatif + $pakan->sore;
        }
        

        return view("batch", [
            "batch"=>$batch,
            "hari"=>$hari,
            "jml"=>$jml,
            "pakanKumulatif"=>$pakanKumulatif,
            "fcr"=>$fcr
        ]);
    }

    public function tambah(): View{
        $lastBatch = BatchModel::all()->last();
        $jenisAyam = JenisModel::all();

        if ($lastBatch==null) {
            $lastBatch = "-";
        } else {
            $lastBatch = $lastBatch->ke;
        }

        return view("tambahBatch", [
            "lastBatchNumber" => $lastBatch,
            "jenisAyam" => $jenisAyam
        ]);
    }

    public function insertBatch(Request $req) {
        $batchNumber = $req->batch;
        $jml = $req->jml;
        $jenis = $req->jenisAyam;

        $batch = new BatchModel();
        $batch->ke = $batchNumber;
        $batch->jumlah = $jml;
        $batch->jenis_id = $jenis;
        $batch->produksi = true;

        $batch->save();
        
        return redirect("/");
    }

    public function tambahJenisAyam(): View{
        return view("tambahJenisAyam");
    }

    public function insertJenisAyam(Request $req) {
        $jenis = new JenisModel();
        $nama = strtolower($req->jenis);

        $jenis->nama = $nama;

        $isNamaExisit = JenisModel::where("nama", $nama)->get();

        if (count($isNamaExisit)==0) {
            $jenis->save();
        }

        return view("tambahJenisAyam");

    }

    
}
