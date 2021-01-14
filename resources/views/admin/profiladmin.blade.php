@extends('adminlte::page')

@section('title', 'AKUM')

@section('content_header')
<h1>ADMIN PANEL SETTING</h1>
@stop

@section('content')



@section('content')
@include('sweetalert::alert')
<!--<form action="/admin/tambah" method="post">
		{{ csrf_field() }}
		Id kurikulum <input type="text" name="id_kurikulum" required="required"> <br/>
        Kode Matakuliah <input type="text" name="kode_matakuliah" required="required"> <br/>
        Semester <input type="text" name="semester" required="required"> <br/>
        Prodi <input type="text" name="prodi" required="required"> <br/>
        tahun angkatan<input type="text" name="tahun_angkatan" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form> -->
<p>Welcome to this beautiful admin panel.</p>

    <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Change Name</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              @foreach($profiladmin as $profiladmin)
			  <form action="/admin/updateprofil" method="post">
              {{ csrf_field() }}
                <div class="card-body">
                <div class="form-group">
                 <input type="hidden" name="id" value="{{ $profiladmin->id }}">
                  </div>
                  <div class="form-group">
                    <label for="kodematakuliah">Nama</label>
                    <input type="text" class="form-control" name="name" required="required" value=" {{ $profiladmin->name }}">
                  </div>
                
                
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
                  <button type="reset" class="btn btn-danger"><i class="nav-icon fa fa-undo" ></i> Reset</button>
                 <button type="button" onclick="history.back();" value="Back" class="btn btn-warning"><i class="nav-icon fa fa-chevron-left" ></i> Kembali</button>
                </div>
              </form>
              @endforeach
            </div>

@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">

@stop

@section('js')

<script>
    console.log('Hi!'); 
</script>



@stop
 
