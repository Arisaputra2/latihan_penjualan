@extends('layout.main')

@section('section')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default mt-5">
                <a href="/produk/create"><button class="btn btn-primary mb-3">Create Produk</button></a>
                @if (session()->has('success'))
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                {{ session('success') }}
                </div>
            @endif
                <table class="table">
                    <thead class="thead-dark">
                      <tr>
                        <th scope="col">No.</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Kategori</th>
                        <th scope="col">Qty</th>
                        <th scope="col">Harga Beli</th>
                        <th scope="col">Harga Jual</th>
                        <th scope="col">Dibuat Pada</th>
                        <th scope="col">Diedit pada</th>
                        <th scope="col">Actions</th>
                      </tr>
                    </thead>
                    <tbody>
                    @foreach ($produk as $p)    
                      <tr>
                        <th scope="row">{{ $loop->iteration }}</th>
                        <td>{{ $p->nama }}</td>
                        <td>{{ $p->category->nama }}</td>
                        <td>{{ $p->qty }}</td>
                        <td>{{ $p->harga_beli }}</td>
                        <td>{{ $p->harga_jual }}</td>
                        <td>{{ $p->created_at }}</td>
                        <td>{{ $p->updated_at }}</td>
                        <td>
                          <a href="/produk/{{ $p->nama }}" class="text-decoration-none text-dark badge"><button class="btn btn-success border-0"><span>View</span></button></a>
                            <form action="/produk/{{ $p->nama }}" method="post" class="d-inline">
                                @method('delete')
                                @csrf
                                <button class="btn btn-danger" onclick="return confirm('Anda ingin menghapus?')"><span>Delete</span></button>
                            </form>
                            <a href="/produk/{{ $p->nama }}/edit" class="text-decoration-none text-dark badge"><button class="btn btn-primary border-0"><span>Ubah</span></button></a>
                        </td>
                      </tr>
                      @endforeach    
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection