@extends('layouts.app')
@extends('layouts.alert')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal">
  Tambah Data
</button>
                <div class="card-body">
                    <div class="table table-responsive">
                        <table class="table table-responsive table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Foto</th>
                                    <th>NIM</th>
                                    <th>Nama</th>
                                    <th>Prodi</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $row)
                                <tr>
                                    <td>{{$row->id}}</td>
                                    <td><img src="{{asset('/foto/'.$row->foto)}}" width="100%"></td>
                                    <td>{{$row->nim}}</td>
                                    <td>{{$row->nama}}</td>
                                    <td>{{$row->prodi}}</td>
                                    <td class="d-flex">
                                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#myModal{{$row->id}}">
  Edit
</button><a href="{{url('/hapus-data-mahasiswa', $row->id)}}"><button class="btn btn-danger ms-3">Hapus</button></a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <a href="{{url('/mahasiswa-pdf')}}"><div class="btn btn-success">Download PDF</div></a>

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
      <div class="modal-header">
        <form action="{{url('simpan-data-mahasiswa')}}" method="POST" enctype="multipart/form-data">
            @csrf
        <h4 class="modal-title">Tambah Data</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">

            <label>Foto</label>
            <input type="file" name="foto" class="form-control" value="{{old('foto')}}">
            @error('foto')
              <div class="alert alert-danger">{{$message}}</div>
            @enderror
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
      <div class="modal-header">
        <form action="{{url('update-data-mahasiswa')}}/{{$row->id}}" method="post">
            @csrf
        <h4 class="modal-title">Tambah Data</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">

            <label>Foto</label>
            <input type="file" name="foto" class="form-control" value="{{old('foto')}}">
            <label>Nim</label>
            <input type="number" name="nim" class="form-control" value="{{$row->nim}}">
            <label>Nama</label>
            <input type="text" name="nama" class="form-control" value="{{$row->nama}}">
             <label>Prodi</label>
            <input type="text" name="prodi" class="form-control" value="{{$row->prodi}}">
       
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
