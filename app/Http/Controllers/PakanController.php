<?php

namespace App\Http\Controllers;

use App\Models\BatchModel;
use App\Models\PakanModel;
use Illuminate\Http\Request;

class PakanController extends Controller
{
    public function show($ke){
        $pakans = PakanModel::all();

        return view("beriPakan", [
            "ke"=>$ke,
            "pakans"=>$pakans
        ]);
    }

    public function insertPakan($ke, Request $req) {
        $waktu = $req->waktu;
        $jmlPakan = $req->jmlPakan;

        $batch = BatchModel::where("ke", $ke)->get()->first();
        $hari = (int) ((strtotime(date("Y-m-d")) - strtotime(date_format($batch->created_at, "Y-m-d"))) / 84600) + 1 ;

        $waktu = $req->waktu;
        $jmlPakan = $req->jmlPakan;

        $isPakanExist = count(PakanModel::where("day", $hari)->get());

        if ($isPakanExist==0) {
            $pakan = new PakanModel();
            $pakan->batch_id = $batch->id;
            $pakan->day = $hari;   
            
            if ($waktu == "pagi") {
                $pakan->pagi = $jmlPakan;
                $pakan->sore = 0;
            } else if ($waktu == "sore") {
                $pakan->pagi = 0;
                $pakan->sore = $jmlPakan;
            }

            $pakan->save();

        } else {
            $pakan = PakanModel::where("day", $hari)->get()->first();

            if ($waktu == "pagi") {
                $pakan->pagi = $jmlPakan;
            } else if ($waktu == "sore") {
                $pakan->sore = $jmlPakan;
            }

            $pakan->save();
        }


        return redirect()->back();
        
    }
}
