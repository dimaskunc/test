@extends('layouts.app')
@extends('layouts.alert')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">{{ __('Dashboard') }}
<button type="button" class="btn btn-success " data-bs-toggle="modal" data-bs-target="#myModal">
  Tambah Data
</button>
</div>
                <div class="card-body">
                    <div class="table table-responsive">
                        <table class="table table-responsive table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>NIM</th>
                                    <th>Nama</th>
                                    <th>Prodi</th>
                                    <th>Mata Kuliah</th>
                                    <th>Nilai</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $row)
                                <tr>
                                    <td>{{$row->id}}</td>
                                    <td>{{$row->nim}}</td>
                                    <td>{{$row->nama}}</td>
                                    <td>{{$row->prodi}}</td>
                                    <td>{{$row->mata_kuliah}}</td>
                                    <td>{{$row->nilai}}</td>
                                    <td>
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal{{$row->id}}">
  Edit
</button><a href="{{url('/hapus-data-nilai', $row->id)}}"><button class="btn btn-danger ms-3">Hapus</button></a>
                                    </td>
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

<!-- Button to Open the Modal -->


<!-- The Modal -->
<div class="modal" id="myModal">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
        <form action="{{url('simpan-data-nilai')}}" method="POST">
            @csrf
      <div class="modal-header d-flex justify-content-between align-items-center">
        <h4 class="modal-title">Tambah Data</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">

            <label>Nim</label>
            <input type="number" name="nim" class="form-control" value="{{old('nim')}}">
            @error('nim')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" value="{{old('nama')}}">
            @error('nama')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
             <label>Prodi</label>
            <input type="text" name="prodi" class="form-control" value="{{old('prodi')}}">
            @error('prodi')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
            <label>Mata Kuliah</label>
            <input type="text" name="mata_kuliah" class="form-control" value="{{old('mata_kuliah')}}">
            @error('mata_kuliah')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
            <label>nilai</label>
            <input type="number" name="nilai" class="form-control" value="{{old('nilai')}}">
            @error('nilai')
            <div class="alert alert-danger">{{$message}}</div>
            @enderror
       
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Simpan</button>
         <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>
        </form>
    </div>
  </div>
</div>

<!-- The Modal -->
@foreach($data as $row)
<div class="modal" id="myModal{{$row->id}}">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
        <form action="{{url('update-data-nilai')}}/{{$row->id}}" method="post">
            @csrf
      <div class="modal-header d-flex justify-content-between align-items-center">
        <h4 class="modal-title">Edit Data</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">

            <label>Nim</label>
            <input type="number" name="nim" class="form-control" value="{{$row->nim}}">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" value="{{$row->nama}}">
             <label>Prodi</label>
            <input type="text" name="prodi" class="form-control" value="{{$row->prodi}}">
             <label>Mata Kuliah</label>
            <input type="text" name="mata_kuliah" class="form-control" value="{{$row->mata_kuliah}}">
             <label>Nilai</label>
            <input type="number" name="nilai" class="form-control" value="{{$row->nilai}}">
       
      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">Simpan</button>
         <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
      </div>
        </form>
    </div>
  </div>
</div>
@endforeach