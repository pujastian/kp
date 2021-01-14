@extends('adminlte::page')

@section('title', 'AKUM')

@section('content_header')
<h1> INPUT MATAKULIAH</h1>
@stop

@section('content')
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
                <h3 class="card-title">Matakuliah</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              @foreach($matakuliah as $matakuliah)
			  <form action="/admin/updatematakuli" method="post">
			  {{ csrf_field() }}
                <div class="card-body">
                <div class="form-group">
                 <input type="hidden" name="id" value="{{ $matakuliah->id_matakuliah }}">
                  </div>
                  <div class="form-group">
                    <label for="kodematakuliah">Kode Matakuliah</label>
                    <input type="text" class="form-control" name="matakuliah" required="required" value=" {{ $matakuliah->kode_matakuliah }}">
                  </div>
                  <div class="form-group">
                    <label for="namamatakuliah">Nama Matakuliah</label>
                    <input type="text" class="form-control" name="matkul" required="required" value="{{ $matakuliah->nama_matkul }}">
				  </div>
				  <div class="form-group">
                    <label for="teori">Teori</label>
                    <input type="text" class="form-control" name="teori" required="required" value=" {{ $matakuliah->teori }}">
          </div>
          <div class="form-group">
                    <label for="praktek">Praktek</label>
                    <input type="text" class="form-control" name="praktek" required="required" value="{{ $matakuliah->praktek }}">
          </div>
          <div class="form-group" data-select2-id="70">
                 <label for="km">km</label>
                  <select class="form-control select2 select2-hidden-accessible" name="km" required="required" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                    <option selected="selected" data-select2-id="3">-- Pilih Kelompok Matakuliah --</option>
                    <option data-select2-id="71">MKK</option>
                    <option data-select2-id="72">MKB</option>
                    <option data-select2-id="73">MBB</option>
                  </select>
                
                </div>
          <div class="form-group">
                    <label for="prasyarat">Prasyarat</label>
                    <input type="text" class="form-control" name="prasyarat" required="required" value="{{ $matakuliah->prasyarat }}">
          </div>
          <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <input type="text" class="form-control" name="keterangan" required="required" value="{{ $matakuliah->keterangan }}">
          </div>
         <!-- <div class="form-group" data-select2-id="70">
                 <label for="prodi">Prodi</label>
                  <select class="form-control select2 select2-hidden-accessible" name="prodi" required="required" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                    <option selected="selected" data-select2-id="3"></option>
                    <option data-select2-id="71">Teknik Informatika</option>
                    <option data-select2-id="72">Sistem Informasi</option>
                    <option data-select2-id="73">Manajemen Informatika</option>
                  </select>
                
                </div> -->
				<!--  <div class="form-group">
                    <label for="prodi">Prodi</label>
                    <input type="text" class="form-control" name="prodi" required="required">
				  </div> -->
				 
                 
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
 
