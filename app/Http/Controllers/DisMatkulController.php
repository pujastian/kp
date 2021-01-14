<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DisMatkulController extends Controller
{
    // panggil view tambah form dismatakuliah
    public function addmatakuli()
    {
        return view('/admin/input/addmatakuli');
    }
    
    public function tambahmatakuli(Request $request)
    {
        DB::table('tabel_matakuliah')->insert([
                    'id_matakuliah' => $request->id_matakuliah,
                    'kode_matakuliah' => $request->kode_matakuliah,
                    'nama_matkul' => $request->nama_matkul,
                    'teori' => $request->teori,
                    'praktek' => $request->praktek,
                    'km' => $request->km,
                    'prasyarat' => $request->prasyarat,
                    'keterangan' => $request->keterangan
        ]);
                    return redirect('/admin/input/distmk')->with('success', 'Data Berhasil di Simpan!');
    }


    // parsing data ke dalam halaman distmk
    public function indexmatakuli()
    {
        $matakuliah = DB::table('tabel_matakuliah')->paginate(5);

        // lempar data dari db
        return view('/admin/input/distmk',['matakuliah' => $matakuliah]);
    }
 

    // method edit data matakuliah
    public function editmatakuli($id)
    {

    // mengambil data matakuliah berdasarkan kode yang terpilih
    $matakuliah = DB::table('tabel_matakuliah')->where('id_matakuliah',$id)->get();

    // parsing data matakuliah ke halaman distmk
    return view('/admin/input/editkuli',['matakuliah' => $matakuliah]);
    }

    public function updatematakuli(Request $request)
    {
        // updatae data matakuliah
        DB::table('tabel_matakuliah')->where('id_matakuliah',$request->id)->update([
                    'kode_matakuliah' => $request->matakuliah,
                    'nama_matkul' => $request->matkul,
                    'teori' => $request->teori,
                    'praktek' => $request->praktek,
                    'km' => $request->km,
                    'prasyarat' => $request->prasyarat,
                    'keterangan' => $request->keterangan

        ]);

            return redirect('/admin/input/distmk')->with('info', 'Data Berhasil di Update');
    }

    public function hapusmatakuli($id)
    {
        //delete data matakuliah by select by "kode"
        DB::table('tabel_matakuliah')->where('id_matakuliah',$id)->delete();

        //redirect ke page distmk
        return redirect('/admin/input/distmk')->with('info', 'Data Berhasil di Terhapus');
    }

    public function caridis(Request $request)
    {
        // tampung data hasil pencarian 

        $cari = $request->cari;

        //ambil data dari tabel distmk
        $matakuliah = DB::table('tabel_matakuliah')->where('kode_matakuliah','like',"%".$cari."%")->paginate();


        //parsing data ke distmk
        return view('/admin/input/distmk',['matakuliah'=>$matakuliah]);
    }



}

