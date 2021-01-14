@extends('adminlte::page')

@section('title', 'AKUM')

@section('content_header')
<h1> INPUT REFERENSI</h1>
@stop

@section('content')

    
<head>
  <title>Laravel Bootstrap Datepicker</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css"/>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>
</head>

<!--<form action="/admin/tambah" method="post">
		{{ csrf_field() }}
		Id kurikulum <input type="text" name="id_kurikulum" required="required"> <br/>
        Kode Matakuliah <input type="text" name="kode_matakuliah" required="required"> <br/>
        Semester <input type="text" name="semester" required="required"> <br/>
        Prodi <input type="text" name="prodi" required="required"> <br/>
        tahun angkatan<input type="text" name="tahun_angkatan" required="required"> <br/>
		<input type="submit" value="Simpan Data">
	</form> -->
<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Kurikulum</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
			  <form action="/admin/tambahrefe" method="post" enctype="multipart/form-data">
			  {{ csrf_field() }}
                <div class="card-body">
                  <div class="form-group">
                    <label for="idreferensi">ID Referensi</label>
                    <input type="text" class="form-control" name="id_referensi" required="required">
                  </div>
                  <div class="form-group">
                    <label for="namafile">Nama File</label>
                    <input type="text" class="form-control" name="nama_file" required="required">
                  </div>
                  <div class="form-group">
                    <label for="tanggal">Tanggal</label>
                    <input type="date" class="form-control" name="tanggal" required="required">
                  </div>
                  <div class="form-group">
                  <label for="tanggal">Upload Files</label>
                  <input type="file" class="form-control" name="file" required="required">
                </div>
                <!-- /.card-body -->
                </div>
                <div class="card-footer">
                  <button type="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
                  <button type="reset" class="btn btn-danger"><i class="nav-icon fa fa-undo" ></i> Reset</button>
                 <button type="button" onclick="history.back();" value="Back" class="btn btn-warning"><i class="nav-icon fa fa-chevron-left" ></i> Kembali</button>
                </div>
              </form>
            </div>
            <script type="text/javascript">
    $('.date').datepicker({  
       format: 'mm-dd-yyyy'
     });  
</script> 

  
@stop

@section('css')
<link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')

<script>
    console.log('Hi!'); 
</script>



@stop
 
