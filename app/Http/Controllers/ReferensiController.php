<?php

namespace App\Http\Controllers;

use App\UploadFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReferensiController extends Controller
{
    
    public function addrefe()
    {

        return view('admin/input/addrefe');

    }

    public function tambahrefe(Request $request)
    {

        $nm = $request->file;
        $namaFile = $nm->getClientOriginalName();

                $dtUpload =  new UploadFile;
                $dtUpload->id_referensi = $request->id_referensi;
                $dtUpload->nama_file = $request->nama_file;
                $dtUpload->tanggal = $request->tanggal;
                $dtUpload->file = $namaFile;

                $nm->move(public_path().'/file', $namaFile);
                $dtUpload->save();

                return redirect('/admin/input/datareferen')->with('success',' Data berhasil Disimpan');

  

        //DB::table('tabel_referensi')->insert([
         //       'id_referensi' => $request->id_rerefensi,
          //      'nama_file' => $request->nama_file,
            //    'tanggal' => $request->tanggal,
           //     'file' => $request->file,

      //  ]);
      

    }
    
    public function indexrefe()
        {
            $referensi = UploadFile::latest()->paginate(5);

            return view('/admin/input/datareferen', compact('referensi'));
        }

    public function hapusrefe($id)
    {
        $hapus = UploadFile::findorfail($id);
        
        $file = public_path('/file/').$hapus->file;

        //cek jika ada file
        if (file_exists($file)){
            //maka delete file direcrtory public/file
            @unlink($file);

            //hapus data di database                                                                                                        
            $hapus->delete();
            return back()->with('info',' Data Berhasil Dihapus');
            
        }
        
        //->with('info','Data Berhasil Dihapus');
    }

}