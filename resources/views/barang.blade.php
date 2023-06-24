@extends('layouts.app')
@extends('layouts.alert')
@section('content')
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.datatables.net/1.11.4/css/dataTables.bootstrap5.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>  
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.js"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/1.11.4/js/dataTables.bootstrap5.min.js"></script>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Data Barang') }}</div>

                <div class="card-body">
                    <div class="table table-responsive">
                        <table class="table table-bordered data-table">
                            <thead>
                                <tr>
                                    
                                    <th>Kode Barang</th>
                                    <th>Nama Barang</th>
                                    <th>Harga Beli</th>
                                    <th>Harga Jual</th>
                      
                                </tr>
                            </thead>
                            <tbody>
                            </tbody>
                        </table>
                    </div>
                   </div>
            </div>
        </div>
    </div>
</div>

<script type="text/javascript">
  $(function () {
      
    var table = $('.data-table').DataTable({
        processing: true,
        serverSide: true,
        ajax: "{{url('/barang')}}",
        columns: [
            {data: 'kode_barang', name: 'kode_barang'},
            {data: 'nama_barang', name: 'nama_barang'},
            {data: 'harga_beli', name: 'harga_beli'},
            {data: 'harga_jual', name: 'harga_jual'},
            
        ]
    });
      
  });
</script>
@endsection
