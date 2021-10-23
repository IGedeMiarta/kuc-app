<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jabatan extends Model
{
    use HasFactory;

    protected $table = 'HRD_jabatan'; //mendefinisikan bahwa nama tabel bukan jamak dari nama model
    protected $primaryKey = 'KodeJabatan'; //mendefinisikan primary key
    protected $keyType = 'string'; //mendefinisikan bahwa primary key bukan int autoincrement

    public $timestamps = false; //mendefinisikan bahwa tabel tidak menggunakan timestamp laravel   

    public function pegawai(){
        return $this->hasMany(Pegawai::class);
    }
}
