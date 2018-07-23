<?php

namespace App\Http\Controllers\Administrasi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Administrasi\Pengajuan;
use App\Administrasi\PengajuanAdministrasi;
use App\Administrasi\PengajuanFeedback;
use App\User;
use Auth;
use DB;

class CekBerkasController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('sipp.administrasi.cek_berkas');
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        // $halo = DB::table('users')
        //     ->join('pengajuan_administrasi', 'users.id', '=', 'pengajuan_administrasi.id_user')
        //     ->select('*')
        //     ->where('id_pengajuan', '=', $id)
        //     ->get();
        $halo = PengajuanAdministrasi::where('id_pengajuan', $id)->get();
        $halo2 = PengajuanFeedback::where('id_pengajuan', $id)->get();
        $halo3 = User::where('id', $id)->get();
        return view('sipp.administrasi.cek_berkas', compact('halo', 'halo2', 'halo3'));
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
    public function update(Request $request, $id_pengajuan)
    {
        // store in the database
        $pengfeed = new PengajuanFeedback;
        // $pengajuan = PengajuanFeedback::where('id_pengajuan', $id)->get();
        $pengfeed->id_pengajuan     = $request->id_pengajuan;
        // $pengfeed->id_pengajuan     = $request->id_pengajuan;
        $pengfeed->kode_feedback    = $request->kode_feedback;
        $pengfeed->catatan          = $request->catatan;
        $pengfeed->feedbacker       = 1;
        $pengfeed->is_viewed        = $request->is_viewed;

        $pengfeed->save();

        // $pengjuan = new Pengajuan;
        // $pengjuan = Pengajuan::find($id);
        // $pengajuan = Pengajuan::where('id_pengajuan', $id)->get();
        $pengajuan = Pengajuan::find($id_pengajuan);
        // $pengajuan->id_user              = Auth::user()->id;
        // dd($pengajuan->id_user);
        // $pengjuan->jenis_pengajuan      = 1;

        if ($pengfeed->kode_feedback == "1") {
            $pengajuan->status_tahapan   = 0;
            $pengajuan->flag_revisi      = 1;
        } elseif ($pengfeed->kode_feedback == "3") {
            $pengajuan->status_tahapan   = 1;
            $pengajuan->flag_revisi      = 0;
        }

        // $pengjuan->flag_ditolak         = $request->flag_ditolak;

        $pengajuan->save();

        // return redirect('/sipp/administrasi');
        return redirect()->route('home.index');
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
