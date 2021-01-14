@extends('adminlte::page')

@section('title', 'AKUM')

@section('content_header')
<h1> CARI BERDASARKAN SEMESTER</h1>
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
                <h3 class="card-title">Kurikulum</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
           
		
	
                <div class="card-body">
               
				  <div class="form-group" data-select2-id="70">
                 <label for="prodi">Semester Awal</label>
                  <select class="form-control select2 select2-hidden-accessible" name="smsawal" id="smsawal" required="required" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                    <option selected="selected" data-select2-id="">-- Pilih Semester --</option>
                    <option data-select2-id="71">1</option>
                    <option data-select2-id="72">2</option>
                    <option data-select2-id="73">3</option>
                    <option data-select2-id="73">4</option>
                    <option data-select2-id="73">5</option>
                    <option data-select2-id="73">6</option>
                    <option data-select2-id="73">7</option>
                    <option data-select2-id="73">8</option>
                  </select>
                  </div>

                  <div class="form-group" data-select2-id="70">
                 <label for="prodi">Semester Akhir</label>
                  <select class="form-control select2 select2-hidden-accessible" name="smsakhir" id="smsakhir" required="required" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                    <option selected="selected" data-select2-id="">-- Pilih Semester --</option>
                    <option data-select2-id="71">1</option>
                    <option data-select2-id="72">2</option>
                    <option data-select2-id="73">3</option>
                    <option data-select2-id="73">4</option>
                    <option data-select2-id="73">5</option>
                    <option data-select2-id="73">6</option>
                    <option data-select2-id="73">7</option>
                    <option data-select2-id="73">8</option>
                  </select>
                
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
               <a href="" onclick="this.href='/admin/reportsms/'+ document.getElementById('smsawal').value + '/'
                + document.getElementById('smsakhir').value " 
               target="_blank" ><button type="submit" class="btn btn-primary"><i class="fa fa-print"></i> Print</button></a>

           
                 <button type="button" onclick="history.back();" value="Back" class="btn btn-warning"><i class="nav-icon fa fa-chevron-left" ></i> Kembali</button>
                </div>
              
              </form>
         
              
      
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
 
