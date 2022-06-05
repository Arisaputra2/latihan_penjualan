@extends('layout.main')

@section('section')
    <div class="container bg-light mt-5 p-5">
        <div class="row text-center">
            <h5>Halaman View Produk</h5>
        </div>
        <div class="row">
            <div class="col-lg-8 p-3">
                  <div class="mb-3 mt-5">
                    <label for="nama" class="form-label">Nama</label>
                    <input type="text" class="form-control" id="nama" name="nama" value="{{ $produk->nama }}" disabled>
                  </div>
                  <div class="mb-3">
                    <label for="kategori" class="form-label">Kategori</label>
                    <input type="text" class="form-control" id="kategori" name="id_kategori" value="{{ $produk->category->nama }}" disabled>
                  </div>
                  <div class="mb-3">
                    <label for="qty" class="form-label">Qty</label>
                    <input type="text" class="form-control" id="qty" name="qty" value="{{ $produk->qty }}" disabled>
                  </div>
                  <div class="mb-3">
                    <label for="harga_beli" class="form-label">Harga Beli</label>
                    <input type="text" class="form-control" id="harga_beli" name="id_harga_beli" value="{{ $produk->harga_beli }}" disabled>
                  </div>
                  <div class="mb-3">
                    <label for="harga_jual" class="form-label">Harga Jual</label>
                    <input type="text" class="form-control" id="harga_jual" name="harga_jual" value="{{ $produk->harga_jual }}" disabled>
                  </div>
                  <a href="/produk" class="btn btn-primary mt-4">Back to Produk</a>
            </div>
        </div>
    </div>
@endsection