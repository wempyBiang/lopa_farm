<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class MatiController extends Controller
{
    public function show(): View{
        return view('mati');
    }
}
