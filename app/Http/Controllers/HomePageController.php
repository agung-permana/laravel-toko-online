<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;

class HomePageController extends Controller
{
    public function index()
    {
        $barang = Barang::paginate(10);
        // dd($barang);
        return view('homepage', compact('barang'));
    }
}
