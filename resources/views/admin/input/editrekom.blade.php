@extends('adminlte::page')

@section('title', 'AKUM')

@section('content_header')
<h1> INPUT KURIKULUM</h1>
@stop

@section('content')

<div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Rekomendasi</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
      @foreach ( $rekomendasi as $rekomendasi )
			  <form action="/admin/updaterekom" method="post">
			  {{ csrf_field() }}
                <div class="card-body">
                <div class="form-group">
                 <input type="hidden" name="id" value="{{ $rekomendasi->id_rekomendasita }}">
                  </div>
                  <div class="form-group">
                    <label for="tanggal">Tanggal</label>
                    <input type="date" class="form-control" name="tanggal" required="required" value="{{ $rekomendasi->tanggal }}">
                  </div>
				  <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" class="form-control" name="nama" required="required" value=" {{ $rekomendasi->nama }}">
          </div>
          <div class="form-group">
                    <label for="asalinstansi">Asal Instansi </label>
                    <input type="text" class="form-control" name="asal_instansi" required="required" value="{{ $rekomendasi->asal_instansi }}">
          </div>
          <div class="form-group">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" name="alamat" required="required" value="{{ $rekomendasi->alamat }}">
          </div>
          <div class="form-group">
                    <label for="nohp">No HP</label>
                    <input type="text" class="form-control" name="no_hp" required="required" value="{{ $rekomendasi->no_hp }}">
          </div>
          <div class="form-group">
                    <label for="email">Email</label>
                    <input type="Email" class="form-control" name="email" required="required" value="{{ $rekomendasi->email }}">
          </div>   
          <div class="form-group">
                    <label for="saranmasukan">Saran Masukan</label>
                    <input type="text" class="form-control" name="saran_masukan" required="required" value="{{ $rekomendasi->saran_masukan }}">
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
 
