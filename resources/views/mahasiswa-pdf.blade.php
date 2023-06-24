@extends('layouts.app-pdf')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Mahasiswa') }}</div>
              <div class="card-body">
                <div class="table table-responsive">
                    <table class="table table-responsive table-bordered table-striped table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th width="20%">Foto</th>
                                <th>NIM</th>
                                <th>Nama</th>
                                <th>Prodi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $no => $row)
                            <tr>
                                <td>{{$no+1}}</td>
                                <td></td>
                                <td>{{$row->nim}}</td>
                                <td>{{$row->nama}}</td>
                                <td>{{$row->prodi}}</td>
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

@endsection