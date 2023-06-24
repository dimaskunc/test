@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-success fw-bold text-white fs-3">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    <div class="table table-responsive">
                        <table class="table table-responsive table-bordered table-striped table-hover">
                            <thead class="bg-primary">
                                <tr style="text-align: center;color:white">
                                    <th>No</th>
                                    <th>Nim</th>
                                    <th>Nama</th>
                                    <th>Alamat</th>
                                    <th>Tahun Angkatan</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $row)
                                <tr>
                                    <td>{{$row->id}}</td>
                                    <td>{{$row->nim}}</td>
                                    <td>{{$row->nama}}</td>
                                    <td>{{$row->alamat}}</td>
                                    <td>{{$row->tahun_angkatan}}</td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <!-- @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }} -->
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
