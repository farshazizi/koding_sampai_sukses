<?php

namespace App\Http\Controllers\Administrasi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Member\Biodata;

class BerkasUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $halo = Biodata::orderby('id')->get();
        return view('sipp.administrasi.berkas_user', compact('halo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sipp.administrasi.berkas_user');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $halo = DB::table('pengajuan_administrasi')
            ->select('pengajuan_administrasi.foto_pas', 'pengajuan_administrasi.foto_ktp', 'pengajuan_administrasi.foto_kta', 'pengajuan_administrasi.sertifikat_sebutan', 'pengajuan_administrasi.surat_izin', 'pengajuan_administrasi.bukti_iuran_sipp', 'pengajuan_administrasi.bukti_pembayaran_sipp')
            ->first();

        return view('sipp.administrasi.berkas_user', compact('halo'));
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
