<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pegawai extends Model
{
    use HasFactory;
    protected $connection = 'Karya_DB'; //inisialisasi koneksi

    protected $table = 'HRD_pegawai'; //mendefinisikan bahwa nama tabel bukan jamak dari nama model
    protected $primaryKey = 'NIP'; //mendefinisikan primary key
    protected $keyType = 'string'; //mendefinisikan bahwa primary key bukan int autoincrement

    protected $guarded = [''];

    public $timestamps = false; //mendefinisikan bahwa tabel tidak menggunakan timestamp laravel   

    public function user(){
        $this->connection('Karya_DB')->belongsTo(User::class,'NIP');
    }

    public function jabatan(){
        return $this->belongsTo(Jabatan::class,'KodeJabatan');
    }
    public function fingerprint(){
        return $this->belongsTo(Fingerprint::class);
    }
    public function absensi(){
        return $this->hasMany(Absensi::class,'kodepegawai');
    }
}
