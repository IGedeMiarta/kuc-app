<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Absensi extends Model
{
    use HasFactory;
    protected $table = 'HRD_fingerscan'; //mendefinisikan bahwa nama tabel bukan jamak dari nama model
    protected $primaryKey = 'kodepegawai'; //mendefinisikan primary key
    protected $keyType = 'string'; //mendefinisikan bahwa primary key bukan int autoincrement

    public $timestamps = false; //mendefinisikan bahwa tabel tidak menggunakan timestamp laravel   

    public static function getAbsenNow(){
        $tanggal = date("Y-m-d",strtotime(now()));
        $data = DB::table('HRD_fingerscan')
            ->select(
                    'HRD_fingerscan.kodepegawai',
                    'HRD_fingerscan.statusmasuk',
                    'HRD_fingerscan.waktu',
                    'HRD_fingerscan.tanggal',
                    'HRD_pegawai.Nama',
                    'HRD_jabatan.NamaJabatan',
                )
            ->join('HRD_pegawai','HRD_fingerscan.kodepegawai','=','HRD_pegawai.NIP')
            ->leftjoin('HRD_jabatan','HRD_pegawai.KodeJabatan','=','HRD_jabatan.KodeJabatan')
            ->where('HRD_fingerscan.tanggal','=',$tanggal)
            ;
         
        return $data;
    }
    public function pegawai(){
        return  $this->belongsTo(Pegawai::class,'kodepegawai');
    }
}
