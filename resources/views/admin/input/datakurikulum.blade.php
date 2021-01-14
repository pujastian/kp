@extends('adminlte::page')


@section('title', 'AKUM')

@section('content_header')
<h1 class=" fa fa-database"> DATA KURIKULUM</h1>

@stop

@section('content')
@include('sweetalert::alert')
<p>Selamat Datang di Panel Admin Kurikulum</p>

<a href="{{ url('/admin/input/addkuri') }}"><button class="btn btn-success"><i class="nav-icon fa fa-plus"></i> ADD</button></a> &emsp;
<a href="{{ url('/admin/input/reportsms') }}"><button class="btn btn-info"><i class="nav-icon fa fa-file"></i> REPORT</button></a>
<br>


<br><div class="card">
              <div class="card-header">
                <h3 class="card-title" >Data Kurikulum</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                <form action="/admin/carikur" method="GET">
                        <div class="input-group" style="width: 30%;">
                            <input type="text" class="form-control form-control-lg" name="cari" placeholder="cari data matakuliah .." value="{{ old('cari') }}">
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
                      <th><center>ID KURIKULUM</center></th>
                      <th><center>KODE MATAKULIAH </center></th>
                      <th><center>SEMESTER</center></th>
                      <th><center>PRODI </center></th>
                      <th><center>TAHUN ANGKATAN </center></th>
                      <th><center>AKSI </center></th>
                    </tr>


@foreach ($kurikulum as $kuri => $kurikulu)
		<tr>
    <td>{{ $kuri+1 }}</td>
			<td>{{ $kurikulu->id_kurikulum }}</td>
			<td>{{ $kurikulu->kode_matakuliah }}</td>
			<td>{{ $kurikulu->semester }}</td>
      <td>{{ $kurikulu->prodi }}</td>
      <td>{{ $kurikulu->tahun_angkatan }}</td>
      <td><a href="/admin/editkuri/ {{ $kurikulu->id_kurikulum }} "><button class="btn btn-success"><i class="nav-icon fa fa-pen" ></i> Edit</button></a>
      <a href="/admin/hapuskuri/{{ $kurikulu->id_kurikulum }} "> <button class="btn btn-danger"><i class="nav-icon fa fa-trash"></i> Delete</button></a>

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
                {{ $kurikulum->links() }}
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
 
