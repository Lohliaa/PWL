@extends('master')
@section('content')

<div id="barang" class ="why">
  <div class="container">
     <div class="row">
        <div class="col-md-12">
           <div class="titlepage">
              <h2>Data Barang </h2>
              <br><br>
 
              <table style="margin-left:auto;margin-right:auto" border="1" cellpadding="10">
                  <thead style="color:white" bgcolor="black">
                    <tr>
                      <th>No</th>
                      <th>Brand</th>
                      <th>Jenis Barang</th>
                      <th>Gambar</th>
                      <th>Spesifikasi</th>
                    </tr>
                    </thead>
                
                    <tbody>
                
                    @foreach ($Barang as $b)
                          <tr>
                          <td>{{$b->id}}</td>
                          <td>{{$b->brand}}</td>
                          <td>{{$b->jenis}}</td>
                          <td><img height="80" width="160" src="{{asset('images/'.$b->gambar)}}"></td>
                          <td>{{$b->spesifikasi}}</td>         
                          </tr> 
                    @endforeach
                    
                    </tbody>

              </table>
              <br><br>

              Halaman : {{ $Barang->currentPage() }} <br>
              Jumlah Data : {{ $Barang->total() }} <br>
              Data Per Halaman : {{ $Barang->perPage() }}

              {{ $Barang->links() }}

          </div>
      </div>
    </div>
  </div>
</div>
@endsection