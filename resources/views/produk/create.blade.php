@extends('layout.main')

@section('section')

    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <form method="POST" action="/produk/create">
                    @csrf
                    <div class="mb-3 mt-5">
                      <label for="nama" class="form-label">Nama</label>
                      <input type="text" class="form-control" id="nama">
                    </div>
                    <div class="mb-3">
                      <label for="kategori" class="form-label">Id Kategori</label>
                      <select class="form-select" name="id_kategori">
                        <option selected>Open this select menu</option>
                        @foreach ($categories as $category)
                        <option value="{{ $category->id }}">{{ $category->nama }}</option>
                        @endforeach
                      </select>
                    </div>
                    <div class="mb-3">
                      <label for="qty" class="form-label">Qty</label>
                      <input type="text" class="form-control" id="qty">
                    </div>
                    <div class="mb-3">
                      <label for="harga beli" class="form-label">Harga Beli</label>
                      <input type="text" class="form-control" id="harga beli">
                    </div>
                    <div class="mb-3">
                      <label for="harga jual" class="form-label">Harga Jual</label>
                      <input type="text" class="form-control" id="harga jual">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </form>
            </div>
        </div>
    </div>

@endsection