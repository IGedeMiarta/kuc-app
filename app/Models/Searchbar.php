<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Searchbar extends Model
{
    use HasFactory;


    public function loadData(){
         $sideBar= [
            'Customer' => '/customer',
            'Supplier' => '/supplier',
            'Plafond' => '/plafond',
            'Sales'=>'/sales',
            'Kendaraan'=>'/kendaraan',
            'Tarif Ritase'=>'/tarif-ritase',
            'Team KUC'=>'/team-kuc',
            'Jenis Barang'=>'/jenis-barang'
        ];
        return response()->json($sideBar);
    }
}
