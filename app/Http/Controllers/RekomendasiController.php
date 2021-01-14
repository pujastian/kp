<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RekomendasiController extends Controller
{
    //
    public function indexrekom()
    {
        $rekomendasi = DB::table('tabel_rekomendasi')->paginate(5);


        return view('/admin/input/datarekomendasi',['rekomendasi' => $rekomendasi]);

    }

    public function updaterekom(Request $request)
    {
        DB::table('tabel_rekomendasi')->where('id_rekomendasita', $request->id)->update([

                        'tanggal' => $request->tanggal,
                        'nama' => $request->nama,
                        'asal_instansi' => $request->asal_instansi,
                        'alamat' => $request->alamat,
                        'no_hp' => $request->no_hp,
                        'email' => $request->email,
                        'saran_masukan' => $request->saran_masukan
        ]);

        return redirect('/admin/input/datarekomendasi')->with('info', 'Data Berhasil Diupdate');
    }


    public function editrekom($id)
    {
        $rekomendasi = DB::table('tabel_rekomendasi')->where('id_rekomendasita',$id)->get();

        return view('/admin/input/editrekom',['rekomendasi' => $rekomendasi]);
    }

    public function hapusrekom($id)
    {
        DB::table('tabel_rekomendasi')->where('id_rekomendasita',$id)->delete();

        return redirect('/admin/input/datarekomendasi')->with('info', 'Data Berhasil Dihapus');

    }

    public  function tambahrekom(Request $request)
    {
        DB::table('tabel_rekomendasi')->insert([

            //id_rekomendasita' => $request->id_rekomendasita,
            'tanggal' => $request->tanggal,
            'nama' => $request->nama,
            'asal_instansi' => $request->asal_instansi,
            'alamat' => $request->alamat,
            'no_hp' => $request->no_hp,
            'email' => $request->email,
            'saran_masukan' => $request->saran_masukan
        ]);
        return redirect('/depan/rekomendasi')->with('success', 'Terimakasih Sudah mengisi
         Form Rekomendasi, Data Berhasil Dikirm!!');
    }
    public function carirek(Request $request)
    {
        // tampung data hasil pencarian 

        $cari = $request->cari;

        //ambil data dari tabel rekomendasi
        $rekomendasi = DB::table('tabel_rekomendasi')->where('nama','like',"%".$cari."%")->paginate();


        //parsing data ke distmk
        return view('/admin/input/datarekomendasi',['rekomendasi'=>$rekomendasi]);
    }

}


