<?php

namespace App\Http\Controllers;

use App\Models\BatchModel;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function show(): View {
        $batchs = BatchModel::all();

        return view("home", [
            "batchs" => $batchs
        ]);
    }
}
