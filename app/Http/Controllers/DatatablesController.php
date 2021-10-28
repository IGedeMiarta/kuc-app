<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use App\Models\Pegawai;
use Illuminate\Http\Request;
use Yajra\DataTables\DataTables;
use Illuminate\Support\Facades\DB;

class DatatablesController extends Controller
{
    public function tabelAbsen(Request $request){

        $data = Absensi::getAbsenNow();
        return DataTables::of($data) ->addIndexColumn()
                    ->make(true);
    }
}
