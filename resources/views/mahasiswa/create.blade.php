@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Tambah Data Mahasiswa</div>

                <div class="card-body">
                    <form action="{{ route('simpan.mahasiswa') }}" method="post">
                        @csrf
                       <div class="form-group">
                            <div class="form-row">  

                                 <div class="col">
                                     <label for="">NAMA MAHASISWA</label>
                                     <select name="user_id" id="user_id" class="form-control">
                                       <option value="" disabled selected>--Pilih user--</option>
                                       @foreach ($user as $u)
                                         <option value="{{ $u->id }}" >{{ $u->name }}</option>
                                       @endforeach
                                    </select> 
                                 </div>

                                 <div class="col">
                                     <label for="">NPM</label>
                                    <input type="number" name="npm" class="form-control" placeholder="Masukkan NPM Anda" maxlength="8">  
                                 </div> 
                                 <div class="col">
                                     <label for="">TEMPAT LAHIR</label>
                                    <input type="text" name="tempat_lahir" class="form-control" placeholder="Masukkan Tempat Lahir Anda">  
                                 </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-row">                                   
                                 <div class="col">
                                 <label for="">TANGGAL LAHIR</label>
                                    <input type="date" name="tanggal_lahir" class="form-control" placeholder="Masukkan Tanggal">  
                                 </div>
                                 </div>
                                   <div class="col">
                                   <label for="">jenis_kelamin</label>
                                   <select name="gender" id="gender"class="form-control">
                                   <option value="" disabled selected>--Pilih Jenis Kelamin--</option>
                                   <option value="L">Laki-Laki</option>
                                   <option value="P">Perempuan</option>
                                  </select>
                                  </div>
                                 <div class="col">
                                     <label for="">TELEPON</label>
                                    <input type="number" name="telepon" class="form-control" placeholder="Masukkan Nomor Telepon">  
                                 </div>
                            </div>
                        </div>
                        </div>
                        <div class="form-group">
                                <div class="form-row">
                                 <div class="col">
                                     <label for="">ALAMAT</label>
                                    <textarea name="alamat" id="alamat" cols="2" rows="3" class="form-control" style="resize: none"></textarea> 
                                 </div>
                            </div>
                       </div>
                       <div class="form-group">
                           <div class="form-row">
                               <div class="col">
                                   <button type="submit"class="btn btn-md btn-primary">SIMPAN</button>
                                   <a href="{{ route('mahasiswa') }}"class="btn btn-md btn-danger">BATAL</a>
                               </div>

                           </div>
                       </div>
                    </form>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection