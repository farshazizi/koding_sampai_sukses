<?php

namespace App\Http\Controllers\Administrasi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Member\Biodata;
use App\Member\Pendidikan;
use App\Member\Pengembangan_Professional;
use App\Administrasi\PengajuanAdministrasi;
use App\Administrasi\PengajuanPendidikan;
use App\Administrasi\PengajuanPengembangan;
use DB;

class BerkasUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $halo = PengajuanAdministrasi::orderBy('id_pengajuan')->get();
        
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
        $halo = PengajuanPendidikan::where('id_pengajuan', $id)->get();
        $halos = PengajuanPengembangan::where('id_pengajuan', $id)->get();

        return view('sipp.administrasi.berkas_user_show', compact('halo', 'halos'));
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
