@extends('layouts.master')
@section('title','user')
@section('content')

<div class="container-fluid">
         <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Halaman Tambah User</h6>
              </div>
              <br>
              <a class="btn btn-warning" href="/user">Kembali</a>
            </div>
            <div class="card-body px-0 pb-2">
              <div class="container">
                <form action="/user/{{ $user->id }}/update" method="post">
                <div class="row">
                @csrf
                    <div class="col-md-12">
                        <div class="input-group input-group-outline my-3">
                        <label class="form-label">Name</label>
                        <input type="text" name="name" value="{{ $user->name }}" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-12">
                        <div class="input-group input-group-outline my-3">
                        <label class="form-label">Email</label>
                        <input type="email" name="email" value="{{ $user->email }}" class="form-control">
                        </div>
                    </div>
                    
                    <div class="col-md-12">
                        <div class="input-group input-group-outline my-3">
                        <label class="form-label">Password</label>
                        <input type="password" name="password" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-12">
                    <label class="form-label">Role</label>
                        <div class="input-group input-group-outline mb-3">
                        <select name="role" id="" class="form-control">
                            <option value="" disabled>Choose your Role</option>
                            <option value="admin">admin</option>
                            <option value="karyawan">karyawan</option>
                        </select>
                        </div>
                    </div>

                    <!-- <div class="col-md-12">
                        <label class="form-label">Avatar</label>
                        <div class="input-group input-group-outline mb-3">
                        <input type="file" class="form-control">
                        </div>
                    </div>
                    
                </div> -->

                <button type="submit" class="btn btn-primary">Update</button>
               
                </form>

              </div>
            </div>
          </div>
        </div>
         </div>

@endsection