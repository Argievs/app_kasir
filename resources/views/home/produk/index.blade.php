@extends('layouts.master')
@section('title','Produk')
@section('content')

<div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-info shadow-info border-radius-lg pt-4 pb-3">
              <h6 class="text-white text-capitalize ps-3">Produk Table</h6>
            </div>
          </div>
          <div class="card-body px-0 pb-2">
            <div class="table-responsive p-0">
                <a href="/produk/tambah" class="btn btn-warning mx-3">Tambah Data</a>
              <table class="table align-items-center mb-0">
                <thead>
                  <tr>

                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Gambar</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Nama Produk</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Harga</th>
                    <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Stok</th>
                    <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach ($produk as $produk)
                  <tr>
                    <td class="text-center">
                        <img src="{{ asset('storage/products/' . $produk->gambar)}}" 
                        class="rounded" style="width:150px;">
                    </td>
                    <td> <h6 class="mb-0 text-sm m-3">{{$produk->nama}}</h6> </td>
                    <td>
                      <p class="text-xs text-secondary mb-0">Rp {{number_format($produk->harga, 2, '.', ',')}}</p>
                    </td>
                    <td> <p class="text-xs text-secondary mb-0">{{ $produk->stok }}</p> </td>
                    <td class="align-middle text-center text-sm">
                      <a href="/produk/{{ $produk->id }}/edit" class="badge badge-sm bg-gradient-success">
                        Edit
                      </a>
                      <a href="/produk/{{ $produk->id }}/hapus" class="badge badge-sm bg-gradient-danger">
                        Hapus
                      </a>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>

@if (session('succes'))

<script>
  Swal.fire({
  title: "Berhasil!",
  text: "{{ session('succes') }}",
  icon: "success"
});
</script>

@endif

@endsection
