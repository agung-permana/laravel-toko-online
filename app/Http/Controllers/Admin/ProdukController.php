<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\Kategori;

class ProdukController extends Controller
{
    public function index()
    {
        $produk = Barang::all();
        return view('admin.produk.index', compact('produk'));
    }

    public function tambah()
    {
        $kategori = Kategori::all();
        return view('admin.produk.tambah', compact('kategori'));
    }

    public function tambahAksi(Request $request)
    {
        // $request->validate([
        //     'nama_barang' => 'required',
        //     'kategori_id' => 'required',
        //     'gambar' => 'required',
        //     'harga' => 'required',
        //     'stok' => 'required',
        //     'keterangan' => 'required',
        // ]);

        $produk = New Barang;
        $produk->nama_barang = $request->nama_barang;
        $produk->kategori_id = $request->kategori_id;
        $produk->gambar = $request->gambar;
        $produk->harga = $request->harga;
        $produk->stok = $request->stok;
        $produk->keterangan = $request->keterangan;

        $produk->save();
        return redirect('/admin/produk')->with('status', 'Data Berhasil Disimpan!');
    }
}
