@extends('backend.main')

@section('content')
  <section class="section">
    <div class="section-header">
      <h1>Tambah Produk</h1>
    </div>
      
    <div class="section-body">
      <div class="card">
        <div class="card-body">
          <form action="{{ url('admin/produk') }}" method="POST">
            @csrf
            <div class="row justify-content-center">
              <div class="col-md-6">
                <div class="form-group mb-4">
                  <label>Nama Produk</label>
                  <input type="text" name="nama_barang" class="form-control">
                </div>

                <div class="form-group mb-4">
                  <label>Kategori</label>
                  <select name="kategori_id" class="form-control">
                    @foreach ($kategori as $item)
                    <option hidden>-- Pilih Kategori --</option>
                    <option value="{{ $item->id }}">{{ $item->nama }}</option>
                    @endforeach
                  </select>
                </div>

                <div class="form-group mb-4">
                  <label>Gambar</label>
                  <input type="text" name="gambar" class="form-control">
                </div>

                <div class="form-group mb-4">
                  <label>Harga</label>
                  <input type="number" name="harga" class="form-control">
                </div>

                <div class="form-group mb-4">
                  <label>Stok</label>
                  <input type="number" name="stok" class="form-control">
                </div>

                <div class="form-group mb-4">
                  <label>Keterangan</label>
                  <textarea name="keterangan" class="form-control" cols="10" rows="5"></textarea>
                </div>

                <div>
                  <button class="btn btn-primary">Tambah</button>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section> 
@endsection

