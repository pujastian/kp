@extends('adminlte::page')


@section('title', 'AKUM')

@section('content_header')
<h1 class="fa fa-book"> DISTRIBUSI MATA KULIAH</h1>

@stop

@section('content')
@include('sweetalert::alert')
<p>Selamat Datang di Panel Admin Mataakuliah</p>

<a href="{{ url('/admin/input/addmatakuli') }}"><button class="btn btn-success"><i class="nav-icon fa fa-plus"></i> ADD</button></a>
<br>

<br><div class="card">
              <div class="card-header">
                <h3 class="card-title">Distribusi Matakuliah</h3>
              </div>
              <!-- /.card-header -->
        
              <div class="card-body">
                <table class="table table-bordered">
                <form action="/admin/caridis" method="GET">
                        <div class="input-group" style="width: 30%;">
                            <input type="text" class="form-control form-control-lg" name="cari" placeholder="cari data matakuliah .." value="{{ old('cari') }}">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-lg btn-default" value="CARI">
                                    <i class="fa fa-search"></i>
                                </button>
                            </div>
                        </div>
                    </form>
                  <thead>
                 <br>
                    <tr>
                   
                       <th><center>No</center></th>
                    <!--   <th><center>ID MATAKULIAH</center></th>  -->
                      <th><center>KODE MATAKULIAH</center></th>
                      <th><center>NAMA MATAKULIAH</center></th>
                      <th><center>TEORI</center></th>
                      <th><center>PRAKTEK </center></th>
                      <th><center>KM</center></th>
                      <th><center>PRASYARAT</center></th>
                      <th><center>KETERANGAN</center></th>
                      <th><center>AKSI </center></th>
                    </tr>
            

  @foreach ($matakuliah as $kuli => $matakulia)
		<tr>
    <td>{{ $kuli+1 }}</td>

			<td>{{ $matakulia->kode_matakuliah }}</td>
			<td>{{ $matakulia->nama_matkul }}</td>
			<td>{{ $matakulia->teori }}</td>
      <td>{{ $matakulia->praktek }}</td>
      <td>{{ $matakulia->km }}</td>
      <td>{{ $matakulia->prasyarat }}</td>
      <td>{{ $matakulia->keterangan }}</td>

      <td><a href="/admin/editmatakuli/ {{ $matakulia->id_matakuliah }} "><button class="btn btn-success"><i class="nav-icon fa fa-pen" ></i> Edit</button></a>
      <a href="/admin/hapusmatakuli/{{ $matakulia->id_matakuliah }} "> <button class="btn btn-danger"><i class="nav-icon fa fa-trash"></i> Delete</button></a>

    </td>
      
    </tr>
    
  @endforeach
  
                  </thead>
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <ul class="pagination pagination-sm m-0 float-right">
            <div>
              {{ $matakuliah->links() }}
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
 
