<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UploadFile extends Model
{
    //
    protected $table = "upload_file";    
    protected $primarykey = "id";
    protected $filable = [
        'id','id_referensi','nama_file','tanggal','file'
    ];
}
