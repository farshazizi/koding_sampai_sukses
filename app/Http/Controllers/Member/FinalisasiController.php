<?php

namespace App\Http\Controllers\Member;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Administrasi\Pengajuan;
use DB;

class FinalisasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('sipp.member.finalisasi');
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
        $results1 = DB::select("INSERT INTO pengajuan_administrasi SELECT * FROM users_administrasi");
        $results2 = DB::select("INSERT INTO pengajuan_pendidikan SELECT * FROM users_pendidikan");
        $results3 = DB::select("INSERT INTO pengajuan_kasus SELECT * FROM users_kasus");
        $results4 = DB::select("INSERT INTO pengajuan_pengembangan SELECT * FROM users_pengembangan");

        $pengajuan = new Pengajuan;

        $pengajuan->id_user         = $request->id_user;
        $pengajuan->jenis_pengajuan = 1;
        $pengajuan->status_tahapan  = 0;
        // $pengajuan->flag_revisi     = $request->flag_revisi;
        // $pengajuan->flag_ditolak    = $request->flag_ditolak;

        $pengajuan->save();

        // return redirect('sipp/member/biodata');
        // return redirect()->route('biodata.show', $m_biodata->id_user);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
