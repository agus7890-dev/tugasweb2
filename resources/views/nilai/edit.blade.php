@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Edit Data Nilai</div>

                <div class="card-body">
                    <form action="{{ route('update.nilai', $nilai->id) }}" method="post">
                    @csrf
                       <div class="form-group">
                            <div class="form-row">                                  
                                 <div class="col-sm-10"><br>
                                     <label for="">NPM</label>
                                    <input type="text" name="npm" class="form-control" placeholder="Masukkan Kode Makul Anda">  
                                 </div>
                                 
                                 <div class="col-sm-10"><br>
                                     <label for="">NAMA MAKUL</label>
                                    <input type="text" name="nama_makul" class="form-control" placeholder="Masukkan Nama Makul Anda">  
                                 </div> </br>

                                 <div class="col-sm-10"><br>
                                     <label for="">SKS</label>
                                    <input type="text" name="sks" class="form-control" placeholder="Masukkan SKS Anda">  
                                 </div></br>

                                 <div class="col-sm-10"><br>
                                     <label for="">Nilai</label>
                                    <input type="text" name="nilai" class="form-control" placeholder="Masukkan Nilai Anda">  
                                 </div></br>
                            </div>
                       </div>
                       <div class="form-group">
                           <div class="form-row">
                               <div class="col">
                                   <button type="submit"class="btn btn-md btn-primary">SIMPAN</button>
                                   <a href="{{ route('nilai') }}"class="btn btn-md btn-danger">BATAL</a>
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
