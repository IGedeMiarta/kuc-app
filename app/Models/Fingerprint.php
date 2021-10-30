<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Fingerprint extends Model
{
    use HasFactory;
    protected $connection = 'Karya_DB'; //inisialisasi koneksi

    protected $table = 'HRD_fingerprint'; //mendefinisikan bahwa nama tabel bukan jamak dari nama model
    protected $primaryKey = 'kodepegawai'; //mendefinisikan primary key
    protected $keyType = 'string'; //mendefinisikan bahwa primary key bukan int autoincrement

    public $timestamps = false; //mendefinisikan bahwa tabel tidak menggunakan timestamp laravel   

    public function pegawai(){
        return  $this->belongsTo(Pegawai::class,'kodepegawai');
    }

}
