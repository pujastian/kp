@extends('adminlte::page')


@section('title', 'AKUM')

@section('content_header')
<h1 class=" fa fa-database"> DATA REFERENSI</h1>

@stop

@section('content')
@include('sweetalert::alert')
<p>Selamat Datang di Panel Admin Referensi</p>

<a href="{{ url('/admin/input/addrefe') }}"><button class="btn btn-success"><i class="nav-icon fa fa-plus"></i> ADD</button></a>
<br>


<br><div class="card">
              <div class="card-header">
                <h3 class="card-title" >Data Referensi</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table class="table table-bordered">
                  <thead>
  
                    <tr>
                   
                       <th><center>No</center></th>
                      <!--<th><center>ID REFERENSI</center></th> -->
                      <th><center>Nama File </center></th>
                      <th><center>Tanggal </center></th>
                      <th><center>File</center></th>
                      <th><center>AKSI </center></th>
                    </tr>


@foreach ($referensi as $refe => $referens)
		<tr>
    <td>{{ $refe+1 }}</td>
		<!--	<td>{{ $referens->id_referensi }}</td> -->
			<td>{{ $referens->nama_file }}</td>
     <td>{{ $referens->tanggal }}</td>
     <td> <a href="{{ asset('file/'. $referens->file) }}" target="_blank" rel="noopener noreferrer">Lihat File</a> </td>
     <!-- <td>{{ $referens->file }}</td> -->
      <td><a href="public/file/ {{ $referens->file }}" download="{{ $referens->file }}"><button class="btn btn-success"><i class="nav-icon fa fa-download" ></i> Download</button></a>
      <a href="/admin/hapusrefe/ {{ $referens->id }} "> <button class="btn btn-danger"><i class="nav-icon fa fa-trash"></i> Delete</button></a>

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
                      {{ $referensi->links() }}
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
 
