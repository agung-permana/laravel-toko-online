@extends('backend.main')

@section('content')
  <section class="section">
    <div class="section-header">
      <h1>Tambah Kategori</h1>
    </div>
      
    <div class="section-body">
      <div class="card">
        <div class="card-body">
          <form action="{{ url('admin/kategori') }}" method="POST">
            @csrf
            <div class="row justify-content-center">
              <div class="col-md-6">
                <div class="form-group mb-4">
                  <label>Nama Kategori</label>
                  <input type="text" name="nama" class="form-control">
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

