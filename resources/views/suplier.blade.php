@extends('master')
@section('content')

<div id="supplier" class ="why">
  <div class="container">
     <div class="row">
        <div class="col-md-12">
           <div class="titlepage">
              <h2>Data Supplier </h2>
              <br><br>
 
              <table style="margin-left:auto;margin-right:auto" border="1" cellpadding="10">
                  <thead style="color:white" bgcolor="black">
                    <tr>
                      <th>Nomor</th>
                      <th>Nama Perusahaan/Perorangan</th>
                      <th>Jenis Laptop</th>
                      <th>Gambar</th>
                      <th>Alamat</th>
                    </tr>
                    </thead>
                
                    <tbody>
                
                    @foreach ($Suplier as $s)
                          <tr>
                          <td>{{ $s->id }}</td>
                          <td>{{ $s->nama }}</td>
                          <td>{{ $s->jenis }}</td>
                          <td><img height="80" width="160" src="{{asset('images/'.$s->gambar)}}"></td>
                          <td>{{ $s->alamat }}</td>
                               
                          </tr> 
                    @endforeach
                    
                    </tbody>

              </table>
              <br><br>
              Halaman : {{ $Suplier->currentPage() }} <br>
              Jumlah Data : {{ $Suplier->total() }} <br>
              Data Per Halaman : {{ $Suplier->perPage() }}

              {{ $Suplier->links() }}
          </div>
      </div>
    </div>
  </div>
</div>
@endsection