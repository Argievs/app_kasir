@extends('layouts.master')
@section('title','Tambah penjualan')
@section('content')

<div class="container-fluid py-4">
    <div class="row">
      <div class="col-12">
        <div class="card my-4">
          <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
            <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
              <h6 class="text-white text-capitalize ps-3">Form Tambah Penjualan</h6>
            </div>
          </div>
          <div class="card-body px-0 pb-2" >
             <form action="/penjualan/simpan" class="m-4 ml-5 mr-5" method="post" autocomplete="off">
                @csrf
                <label class="form-label" for="IDpelanggan">Nama Pelanggan Terbaru</label>
                <div class="input-group input-group-outline mb-3">
                  <input
                  type="hidden"
                  name="IDpelanggan"
                  class="form-control"
                  id="IDpelanggan"
                  readonly
                  value="{{ $PB->id }} "
                  >
                  <input
                  type="text"
                  name="IDpelanggan"
                  class="form-control"
                  id="IDpelanggan"
                  disabled
                  value="{{ $PB->nama }} "
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
