@extends('layouts.master')
@section('title','Tambah Produk')
@section('content')

<div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
              <h6 class="text-white text-capitalize ps-3">Form Tambah Produk</h6>
            </div>
          </div>
          <div class="card-body px-0 pb-2">
            <form action="/produk/simpan" method="post" enctype="multipart/form-data" class="m-4 ml-5 mr-5" autocomplete="off">
                @csrf
                <div class="mb-3">
                    <label for="gambar" class="form-label">Gambar</label>
                    <input
                        type="file"
                        class="form-control"
                        name="gambar"
                        id="gambar"
                        aria-describedby="helpId"
                        placeholder=""
                    />
                </div>    
                <label class="form-label" for="nama">Nama Produk</label>
                <div class="input-group input-group-outline mb-3">
                    <input
                        type="text"
                        class="form-control"
                        name="nama"
                        id="nama"
                        required
                        >
                </div>


                <label class="form-label" for="harga">Harga</label>
                <div class="input-group input-group-outline mb-3 ">
                      <input
                        type="number"
                        class="form-control"
                        name="harga"
                        id="harga"
                        required
                        >
                </div>
                <label class="form-label" for="stok">Stok</label>
                <div class="input-group input-group-outline mb-3">
                      <input
                        type="number"
                        class="form-control"
                        name="stok"
                        id="stok"
                        required
                        >
                </div>
                
                <button type="submit" class="btn btn-info">Tambah</button>
             </form>
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
@elseif (session('gagal'))
<script>
      Swal.fire({
        title: "Terjadi Masalah!",
        text: "{{session('gagal')}}",
        icon: "error"
        });
</script>
@endif
@endsection