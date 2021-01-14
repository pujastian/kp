<?php

namespace App\Http\Controllers;
use App\Matakuliah;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KurikulumController extends Controller
{
 
	public function panggil()
	{
		  $matakuliah = DB::table('tabel_matakuliah')->get();

		  return view('/admin/input/addkuri',['matakuliah' => $matakuliah]);
	}

public function addkuri()
{
 
	// memanggil view tambah
	return view('admin/input/addkuri');
 
}


// method untuk insert data ke table kurikulum

public function tambahkuri(Request $request)
{
	// insert data ke table kurikulum
DB::table('tabel_kurikulum')->insert([
		'id_kurikulum' => $request->id_kurikulum,
		'kode_matakuliah' => $request->kode_matakuliah,
		'semester' => $request->semester,
        'prodi' => $request->prodi,
        'tahun_angkatan' => $request->tahun_angkatan
	]);
	// redirect ke halaman tabel awal 
	return redirect('/admin/input/datakurikulum')->with('success', 'Data Berhasil di Simpan!');
	
}




// parsing data untuk nampilkan ke dalam view halaman datakurikulum
    public function indexkuri()
{
    // ambil data dari db
    $kurikulum = DB::table('tabel_kurikulum')->paginate(5);
    // var_dump($kurikulum);

    // lempar data dari db
    return view('/admin/input/datakurikulum',['kurikulum' => $kurikulum]);


}




// method untuk edit data kurikulum
public function editkuri($id)
{
	// mengambil data kurikulum berdasarkan id yang dipilih
	$kurikulum = DB::table('tabel_kurikulum')->where('id_kurikulum',$id)->get();
	// passing data kurikulum yang didapat ke view editkuri
	return view('/admin/input/editkuri',['kurikulum' => $kurikulum]);
 
}

public function updatekuri(Request $request)
{
	// update data kurikulum
	DB::table('tabel_kurikulum')->where('id_kurikulum',$request->id)->update([
		'kode_matakuliah' => $request->matakuliah,
		'semester' => $request->semester,
        'prodi' => $request->prodi,
        'tahun_angkatan' => $request->angkatan
	]);
	// alihkan halaman ke halaman edirkuri
	return redirect('/admin/input/datakurikulum')->with('info', 'Data Berhasil di terupdate');
}

	public function hapuskuri($id)
	{
		//delete data kurikulum by select "id"
		DB::table('tabel_kurikulum')->where('id_kurikulum',$id)->delete();

		// redirect ke page datakurikulum
		return redirect('/admin/input/datakurikulum')->with('info', 'Data Berhasil di Terhapus');
	}



	public function indexre()
	{
		return view('/admin/input/reportsms');
	}
	public function cetaklapo()
	{
		return view('/admin/input/cetaklaporan');
	}


	//report
	public function reportsms($smsawal, $smsakhir)

	{
	   
	   $cetaklaporan = DB::table('tabel_kurikulum')
	   ->whereBetween('semester', [$smsawal, $smsakhir])->get();
		
	
		
	   return view('/admin/input/cetaklaporan', compact('cetaklaporan'));
	}
	
	public function carikur(Request $request)
    {
        // tampung data hasil pencarian 

        $cari = $request->cari;

        //ambil data dari tabel kurikulum
        $kurikulum = DB::table('tabel_kurikulum')->where('kode_matakuliah','like',"%".$cari."%")->paginate();


        //parsing data ke distmk
        return view('/admin/input/datakurikulum',['kurikulum'=>$kurikulum]);
    }

}


