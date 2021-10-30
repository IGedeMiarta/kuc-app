<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Absensi extends Model
{
    use HasFactory;
    protected $connection = 'Karya_DB'; //inisialisasi koneksi
    
    protected $table = 'HRD_fingerscan'; //mendefinisikan bahwa nama tabel bukan jamak dari nama model
    protected $primaryKey = 'kodepegawai'; //mendefinisikan primary key
    protected $keyType = 'string'; //mendefinisikan bahwa primary key bukan int autoincrement

    public $timestamps = false; //mendefinisikan bahwa tabel tidak menggunakan timestamp laravel   

    public static function getAbsenNow(){
        $data = DB::connection('Karya_DB')->table('HRD_pegawai')
                ->select(
                    'HRD_fingerscan.kodepegawai',
                    'HRD_fingerscan.statusmasuk',
                    'HRD_fingerscan.waktu',
                    'HRD_fingerscan.tanggal',
                    'Nama',
                    'HRD_jabatan.NamaJabatan')
                ->join('HRD_fingerscan','HRD_fingerscan.kodepegawai','=','HRD_pegawai.NIP')
                ->join('HRD_jabatan','HRD_pegawai.KodeJabatan','=','HRD_jabatan.KodeJabatan')
                ;
                
                // $data = Pegawai::all();
                    
        return $data;
    }


    
    public function pegawai(){
        return  $this->belongsTo(Pegawai::class,'kodepegawai');
    }
}
