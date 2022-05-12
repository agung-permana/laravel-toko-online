@extends('backend.main')

@section('content')
  <section class="section">
    <div class="section-header">
      <h1>Produk</h1>
    </div>
      
    <div class="section-body">
      <div class="card">
        <div class="card-header">
          <a href="{{ url('admin/tambah/produk') }}" class="btn btn-sm btn-primary">
            <i class="fa fa-plus"></i>
            Tambah
          </a>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered table-md">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>Nama</th>
                  <th>Kategori</th>
                  <th>Gambar</th>
                  <th>Harga</th>
                  <th>Stok</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>
                @foreach ($produk as $item)
                    
                <tr>
                  <td>{{ $loop->iteration }}</td>
                  <td>{{ $item->nama_barang }}</td>
                  <td>{{ $item->kategori->nama }}</td>
                  <td>
                      <img src="{{ asset('gambar/', $item->gambar) }}" alt="">
                  </td>
                  <td>Rp. {{ number_format($item->harga) }}</td>
                  <td>{{ $item->stok }}</td>
                  <td>
                    <a href="{{ url('admin/kategori/edit', $item->id) }}" class="btn btn-sm btn-primary">
                      <i class="fa fa-edit"></i>
                    </a>

                    <form class="d-inline" action="{{ url('admin/kategori/hapus', $item->id) }}" method="post">
                      @csrf
                      @method('DELETE')
                      <button type="submit" class="btn btn-sm btn-danger">
                        <i class="fa fa-trash"></i>
                      </button>
                    </form>
                  </td>
                </tr>
                @endforeach
              </tbody>
          </table>
          </div>
        </div>
      </div>
    </div>
  </section> 
@endsection

