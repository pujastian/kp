@extends('adminlte::page')


@section('title', 'AKUM')

@section('content_header')
<h1 class=" fa fa-database"> DATA REKOMENDASI<h1>

@stop

@section('content')
@include('sweetalert::alert')
<p>Selamat Datang di Panel Admin Rekomendasi</p>


<br>


<br><div class="card">
              <div class="card-header">
                <h3 class="card-title" >Data Rekomendasi</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                <form action="/admin/carirek" method="GET">
                        <div class="input-group" style="width: 30%;">
                            <input type="text" class="form-control form-control-lg" name="cari" placeholder="cari data rekomendasi .." value="{{ old('cari') }}">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-lg btn-default" value="CARI">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                    <br>
                  <thead>
  
                    <tr>
                   
                       <th><center>No</center></th>
                      <th><center>ID Rekomendasi</center></th>
                      <th><center>Tanggal</center></th>
                      <th><center>Nama</center></th>
                      <th><center>Asal Instansi</center></th>
                      <th><center>Alamat</center></th>
                      <th><center>No Hp</center></th>
                      <th><center>Email</center></th>
                      <th><center>Saran Masukan</center></th>
                      <th><center>Aksi</center></th>
                    </tr>


@foreach  ($rekomendasi as $reko => $rekomend)
		<tr>
    <td>{{ $reko+1 }}</td>
    <td>{{ $rekomend->id_rekomendasita }}</td>
     <td>{{ $rekomend->tanggal }}</td>
     <td>{{ $rekomend->nama }}</td>
     <td>{{ $rekomend->asal_instansi }}</td>
     <td>{{ $rekomend->alamat }}</td>
     <td>{{ $rekomend->no_hp }}</td>
     <td>{{ $rekomend->email }}</td>
     <td>{{ $rekomend->saran_masukan }}</td>
 
     <td><a href="/admin/editrekom/ {{ $rekomend->id_rekomendasita }} "><button class="btn btn-success"><i class="nav-icon fa fa-pen" ></i> Edit</button></a>
      <a href="/admin/hapusrekom/ {{ $rekomend->id_rekomendasita }} "> <button class="btn btn-danger"><i class="nav-icon fa fa-trash"></i> Delete</button></a>

    </td>
      
    </tr>
    
  @endforeach
    



    
                  </thead>
                  <tbody>
                    <tr>
                      
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
              <div>
                      {{  $rekomendasi->links() }}
              </div>
               
                </ul>
              </div>
            </div>
            <br>
            
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

<script>
    console.log('Hi!'); 
</script>



@stop
 
