@extends('layout.main')

@section('section')

    <div class="container">
        <div class="row mt-5 mb-5">
            <h5 class="text-center">Halaman Update</h5>
            <div class="col-lg-8">
                <form method="POST" action="/produk/{{ $produk->nama }}">
                    @method('put')
                    @csrf
                    <div class="mb-3 mt-5">
                      <label for="nama" class="form-label">Nama</label>
                      <input type="text" class="form-control @error('nama') is-invalid @enderror" id="nama" name="nama" value="{{ old('nama', $produk->nama) }}">
                      @error('nama')
                          <div class="invalid-feedback">
                              {{ $message }}
                          </div>
                      @enderror
                    </div>
                    <div class="mb-3">
                      <label for="kategori" class="form-label">Id Kategori</label>
                      <select class="form-select form-select-lg mb-3" name="category_id" id="kategori">
                          @foreach ($categories as $category)
                          @if (old('category_id', $produk->category_id) == $category->id)
                          <option value="{{ $category->id }}" selected>{{ $category->nama }}</option>
                          @else
                          <option value="{{ $category->id }}">{{ $category->nama }}</option>
                          @endif
                          @endforeach
                      </select>
                    </div>
                    <div class="mb-3">
                      <label for="qty" class="form-label ">Qty</label>
                      <input type="text" class="form-control @error('qty') is-invalid @enderror" id="qty" name="qty" value="{{ old('qty', $produk->qty) }}">
                      @error('qty')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                  @enderror
                    </div>
                    <div class="mb-3">
                      <label for="harga beli" class="form-label">Harga Beli</label>
                      <input type="text" class="form-control @error('harga_beli') is-invalid @enderror" id="harga beli" name="harga_beli" value="{{ old('harga_beli', $produk->harga_beli) }}" >
                      @error('harga_beli')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                  @enderror
                    </div>
                    <div class="mb-3">
                      <label for="harga jual" class="form-label">Harga Jual</label>
                      <input type="text" class="form-control @error('harga_jual', $produk->harga_jual) is-invalid @enderror" id="harga jual" name="harga_jual" value="{{ old('harga_jual', $produk->harga_jual) }}">
                      @error('harga_jual')
                      <div class="invalid-feedback">
                          {{ $message }}
                      </div>
                  @enderror
                    </div>
                    <button type="submit" class="btn btn-primary border-0 mt-3">Update Produk</button>
                    <a href="/produk" class="btn btn-warning ms-5 mt-3">Back to Produk</a>
                  </form>
            </div>
        </div>
    </div>

@endsection