<?php

namespace App\Http\Controllers;

use App\Models\Jabatan;
use App\Models\Pegawai;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Symfony\Component\HttpFoundation\Response;

class PegawaiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data['title'] = 'All Pegawai';
        $data['pegawai']= Pegawai::where('StatusPegawai','!=','Non Aktif')
                            ->orderByDesc('Tgl_Masuk')->get();
     
        return view('pages.pegawai.pegawai',$data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function show($NIP)
    {
        $data['title'] = 'Detail Pegawai';
        $data['headerlink'] = ['/pegawai'=>'Pegawai','#'=>'Detail Pegawai'];
        $data['pegawai'] = Pegawai::where('NIP','=',$NIP)->first();
        $data['jabatan'] = Jabatan::get();
        
        return view('pages.pegawai.pegawai-detail',$data);
        // return $data;
      
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function edit(Pegawai $pegawai)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $NIP)
    {
        $rules = [
            'NoKTP'=>'required|numeric',
            'Nama' => 'required',
            'Telpon'=>'required',
            'Alamat'=>'required',
            'Agama'=>'required',
            'Jenis_Kelamin'=>'required',
            'KodeJabatan'=>'required',
            'Tempat_Lahir'=>'required',
            'Tgl_Lahir'=>'required',
        ];
        
        $validateData = $request->validate($rules);

        try {
            Pegawai::where('NIP',$NIP)->update($validateData);
            return redirect("/pegawai-detail/{$NIP}")->with('Success','Data Pegawai Updated');
        } catch (QueryException $e) {
            return redirect("/pegawai-detail/{$NIP}")->with('Failed',$e->errorInfo);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pegawai  $pegawai
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pegawai $pegawai)
    {
        //
    }
}
