<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use function Ramsey\Uuid\v1;

class AdminController extends Controller

{
    public function distribusiMK()
    {
        return view('admin/input/distmk');
    }

    public function datakuri()
    {
        return view('admin/input/datakurikulum');
    }

    public function datareko()
    {
        return view('admin/input/datarekomendasi');
    }


   

    public function datarefe()
    {
        return view('admin/input/datareferen');
    }



    public function updateprofil(Request $request)
    {
        DB::table('users')->where('id', $request->id)->update([

                'name' => $request->name
                
        ]);
        return redirect('/admin/profiladmin')->with('info', 'Data Berhasil di Update');
    }


    public function editprofil($id)
    {
        $profiladmin = DB::table('users')->where('id', $id)->get();
        return view('/admin/profiladmin', ['profiladmin' => $profiladmin]);
    }

    public function indexadmin()
    {
        $profiladmin = DB::table('users')->get();

        return view('/admin/profiladmin',['profiladmin' => $profiladmin]);
    }

  

}
