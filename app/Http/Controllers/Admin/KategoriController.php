<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Kategori;
use Illuminate\Support\Str;

class KategoriController extends Controller
{
    public function index()
    {
        $kategori = Kategori::all();
        return view('admin.kategori.index', compact('kategori'));
    }

    public function tambah()
    {
        return view('admin.kategori.tambah');
    }

    public function tambahAksi(Request $request)
    {
        $request->validate([
            'nama' => 'required',
        ]);

        $kategori = New Kategori;
        $kategori->nama = $request->nama;
        $kategori->slug = Str::slug($request->nama);

        $kategori->save();
        return redirect('/admin/kategori')->with('status', 'Data Berhasil Disimpan!');
    }

    public function edit($id)
    {
        $kategori = Kategori::find($id);
        return view('admin/kategori/edit', compact('kategori'));
    }

    public function editAksi(Request $request, $id)
    {
        $request->validate([
            'nama' => 'required',
        ]);

        $kategori = Kategori::find($id);
        $kategori->nama = $request->nama;
        $kategori->slug = Str::slug($request->nama);

        $kategori->update();
        return redirect('/admin/kategori')->with('status', 'Data Berhasil Diubah!');
    }

    public function hapus($id)
    {
        $kategori = Kategori::find($id);

        $kategori->delete();
        return redirect('/admin/kategori')->with('status', 'Data Berhasil Diubah!');
    }
}
