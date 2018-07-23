<?php

namespace App\Http\Controllers\Pewawancara;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Administrasi\PengajuanAdministrasi;
use App\Administrasi\PengajuanPendidikan;   
use App\Administrasi\PengajuanKarir;
use App\Administrasi\PengajuanKasus;
use App\Administrasi\PengajuanPengembangan;

class DoWawancaraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $halo = Biodata::orderby('id')->get();
        // return view('sipp.pewawancara.dowawancara', compact('halo'));
        return view('sipp.pewawancara.dowawancara');
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
        // store in the database
        // $m_biodata = new Biodata;
        // $m_biodata->email                           = $request->email;
        // $m_biodata->nama_lengkap                    = $request->nama_lengkap;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $halo = PengajuanAdministrasi::where('id_pengajuan', $id)->get();
        $halo2 = PengajuanPendidikan::where('id_pendidikan', $id)->get();
        $halo3 = PengajuanKarir::where('id_karir', $id)->get();
        $halo4 = PengajuanKasus::where('id_kasus', $id)->get();
        $halo5 = PengajuanPengembangan::where('id_pengembangan', $id)->get();

        return view('sipp.pewawancara.dowawancara', compact('halo', 'halo2', 'halo3', 'halo4', 'halo5'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
