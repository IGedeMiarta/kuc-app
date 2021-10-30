<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Kodearea extends Model
{
    use HasFactory;

    protected $connection = 'pgsql'; //inisialisasi koneksi

    protected $table = 'area'; //mendefinisikan bahwa nama tabel bukan jamak dari nama model
    protected $primaryKey = 'kodearea'; //mendefinisikan primary key
    protected $keyType = 'string'; //mendefinisikan bahwa primary key bukan int autoincrement

    protected $guarded = [''];

    public $timestamps = false; //mendefinisikan bahwa tabel tidak menggunakan timestamp laravel   
}
