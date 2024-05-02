<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Barang;

class HomeController extends Controller
{
    public function index()
    {
        $items = Barang::all();
        return view('home', compact('items'));
    }
}

