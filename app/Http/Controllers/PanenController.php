<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class PanenController extends Controller
{
    public function show(): View {
        return view('panen');
    }
}
