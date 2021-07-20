@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">Data Nilai
                      <a href="{{ route('nilai') }}" class="btn btn-md btn-primary float-right">Tambah Data Nilai</a> 
                </div>

                <div class="card-body">
                   <div class="table-responsive">
                       <table class="table table-bordered">
                           <tr>
                              <th>NO</th>
                              <th>NPM</th>
                              <th>NAMA MAKUL</th>
                              <th>SKS</th>
                              <th>NILAI</th>
                              <th>AKSI</th>
                          </tr>
                           @foreach ($nilai as $nl)
                            <tr>
                                <td> {{ $nl->id }} </td>
                                <td> {{ $nl->npm }} </td>
                                <td> {{ $nl->nama_makul }} </td>
                                <td> {{ $nl->sks }} </td>
                                <td> {{ $nl->nilai }} </td>
                                <td>
                                    <a href="{{ route('edit.nilai', $nl->id) }}" class="btn btn-sn btn-warning">EDIT</a>
                                    <a href="{{ route('hapus.nilai', $nl->id) }}" class="btn btn-sn btn-danger">HAPUS</a>
                                </td>
                            </tr>
                            @endforeach
                            
                        </table>
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
