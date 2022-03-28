@extends('master')
@section('content')

<div id="pegawai" class ="why">
  <div class="container">
     <div class="row">
        <div class="col-md-12">
           <div class="titlepage">
              <h2>Data Pegawai </h2>
              <br><br>
 
              <table style="margin-left:auto;margin-right:auto" border="1" cellpadding="10">
                  <thead style="color:white" bgcolor="black">
                    <tr>
                      <th>No</th>
                      <th>Nama </th>
                      <th>TTL</th>
                      <th>Alamat</th>
                      <th>Telepon</th>
                    </tr>
                    </thead>
                
                    <tbody>
                
                    @foreach ($Pegawai as $p)
                          <tr>
                          <td>{{$p->id}}</td>
                          <td>{{ $p->nama }}</td>
                          <td>{{$p->ttl}}</td>
                          <td>{{$p->alamat}}</td>  
                          <td>{{$p->telepon}}</td>         
                          </tr> 
                    @endforeach
                    
                    </tbody>

              </table>
              <br><br>
              Halaman : {{ $Pegawai->currentPage() }} <br>
              Jumlah Data : {{ $Pegawai->total() }} <br>
              Data Per Halaman : {{ $Pegawai->perPage() }}

              {{ $Pegawai->links() }}
          </div>
      </div>
    </div>
  </div>
</div>
@endsection