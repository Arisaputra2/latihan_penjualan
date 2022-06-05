@extends('layout.main')

@section('section')

    <div class="container">
        <div class="row mt-5 mb-5">
            <h5 class="text-center">Halaman Create</h5>
            <div class="col-lg-12 justify-content-center d-block">
                <form method="POST" action="/produk">
                    @csrf
                    <div class="mb-3 mt-5">
                      <label for="nama" class="form-label">Nama</label>
                      <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama') }}">
                      @error('nama')
                          <div class="invalid-feedback">
                              {{ $message }}
                          </div>
                      @enderror
                    </div>
                    <div class="mb-3">
                      <label for="kategori" class="form-label">Id Kategori</label>
<<<<<<< HEAD
                      <select class="form-select mb-3" name="category_id" id="kategori">
=======
                      <select class="form-select form-select-lg mb-3" name="category_id" id="kategori">
>>>>>>> ef354c6e8cbcdc7f06bcdda233fe816516de6cd7
                          @foreach ($categories as $category)
                          <option value="{{ $category->id }}">{{ $category->nama }}</option>
                          @endforeach
                      </select>
                    </div>
                    <div class="mb-3">
                      <label for="qty" class="form-label ">Qty</label>
                      <input type="text" class="form-control @error('qty') is-invalid @enderror" id="qty" name="qty" value="{{ old('qty') }}">
                      @error('qty')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                  @enderror
                    </div>
                    <div class="mb-3">
                      <label for="harga beli" class="form-label">Harga Beli</label>
                      <input type="text" class="form-control @error('harga_beli') is-invalid @enderror" id="harga beli" name="harga_beli" value="{{ old('harga_beli') }}" >
                      @error('harga_beli')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                  @enderror
                    </div>
                    <div class="mb-3">
                      <label for="harga jual" class="form-label">Harga Jual</label>
                      <input type="text" class="form-control @error('harga_jual') is-invalid @enderror" id="harga jual" name="harga_jual" value="{{ old('harga_jual') }}">
                      @error('harga_jual')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                  @enderror
                    </div>
                    <button type="submit" class="btn btn-primary border-0 mt-3">Create Produk</button>
                    <a href="/produk" class="btn btn-warning ms-5 mt-3">Back to Produk</a>
                  </form>
            </div>
        </div>
    </div>

@endsection