<?php

namespace App\Http\Controllers\Administrasi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Administrasi\PengajuanFeedback;
use App\Administrasi\Pengajuan;
use App\Member\Biodata;
use DB;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $halo = Biodata::orderby('id_user')->get();
        return view('sipp.administrasi.index', compact('halo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('sipp.administrasi.home');
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
    public function show($id_user)
    {
        $halo = Biodata::where('id_user', $id_user)->get();
        $halo2 = PengajuanFeedback::where('id_pengajuan', $id_user)->get();
        return view('sipp.administrasi.home_show', compact('halo', 'halo2'));
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
        // store in the database
        $pengfeed = new PengajuanFeedback;
        $pengfeed->id_pengajuan     = 2;
        $pengfeed->kode_feedback    = $request->kode_feedback;
        $pengfeed->catatan          = $request->catatan;
        $pengfeed->feedbacker       = 1;
        $pengfeed->is_viewed        = $request->is_viewed;

        // $pengjuan = new Pengajuan;
        $pengjuan = Pengajuan::find($id);
        $pengjuan->id_user              = $request->input('id_user');
        // $pengjuan->jenis_pengajuan      = 1;

        if ($pengfeed->kode_feedback == 1) {
            $pengjuan->status_tahapan   = 0;
            $pengjuan->flag_revisi      = 1;
        } elseif ($pengfeed->kode_feedback == 3) {
            $pengjuan->status_tahapan   = 1;
            $pengjuan->flag_revisi      = 0;
        }

        // $pengjuan->flag_ditolak         = $request->flag_ditolak;

        $pengfeed->save();
        $pengjuan->save();

        return redirect()->route('ubahberkas.index');
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
