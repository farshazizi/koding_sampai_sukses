<?php

namespace App\Http\Controllers\Administrasi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Administrasi\Pengajuan;
use App\Administrasi\PengajuanAdministrasi;
use App\Administrasi\PengajuanFeedback;
use App\Member\Biodata;
use Auth;
use DB;
use View;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        // $cd = DB::table('pengajuan')
        //         // ->select('status_tahapan', 'flag_revisi', 'flag_ditolak')
        //         ->select('flag_revisi')
        //         // ->select('status_tahapan')
        //         ->where('id_user', '=', Auth::user()->id)
        //         ->first();
        // $halo = PengajuanAdministrasi::orderby('id_pengajuan')->get();
        // return view('sipp.administrasi.index', compact('halo'))->with('statah', $cd);

        // $a = DB::table('pengajuan')
        //     ->select('status_tahapan', 'flag_revisi', 'flag_ditolak')
        //     // ->where('id_pengajuan', '=', Auth::user()->id)
        //     ->get();

        // if ($a->isEmpty()) {
        //     $status_tahapan = 1;
        //     $flag_revisi = 0;
        // } else {
        //     $status_tahapan = ($a[0]->status_tahapan);
        //     $flag_revisi = ($a[0]->flag_revisi);
        // }

        // // dd($flag_revisi);

        // if ($status_tahapan == 0 && $flag_revisi == 0) {            
        //     // $halo = PengajuanAdministrasi::orderby('id_pengajuan')->get();
        //     return view('sipp.administrasi.index', compact('halo'));
        // } 
        // elseif ($status_tahapan == 0 && $flag_revisi == 1) {
        //     $cd = DB::table('pengajuan')
        //         // ->select('status_tahapan', 'flag_revisi', 'flag_ditolak')
        //         ->select('flag_revisi')
        //         // ->select('status_tahapan')
        //         ->where('id_user', '=', Auth::user()->id)
        //         ->first();
        //     return view('sipp.administrasi.index')->with('statah', $cd);
        // }

        $a = DB::table('pengajuan')
            ->select('status_tahapan', 'flag_revisi', 'flag_ditolak')
            ->where('id_pengajuan', '=', Auth::user()->id)
            ->get();

        if ($a->isEmpty()) {
            $status_tahapan = 0;
            $flag_revisi = 0;
        } else {
            $status_tahapan = ($a[0]->status_tahapan);
            $flag_revisi = ($a[0]->flag_revisi);
        }

        // dd($a[0]->status_tahapan);
        // dd($a[0]->flag_revisi);

        if ($status_tahapan == 0 && $flag_revisi == 0) {
            // $cd = DB::table('pengajuan')
            //     ->select('status_tahapan', 'flag_revisi')
            //     ->where('id_user', '=', Auth::user()->id)
            //     ->first();
            // $halo = PengajuanAdministrasi::orderby('id_pengajuan')->get();

            // // return view('sipp.administrasi.index', compact('halo'));
            // return view('sipp.administrasi.index', compact('halo')->with('statah', $cd));
        } 
        elseif ($status_tahapan == 0 && $flag_revisi == 1) {
            $cd = DB::table('pengajuan')
                ->select('status_tahapan', 'flag_revisi')
                ->where('id_pengajuan', '=', Auth::user()->id)
                ->first();
            $halo = PengajuanAdministrasi::orderby('id_pengajuan')->get();
            // dd($halo);

            return view('sipp.administrasi.index', compact('halo'))->with('statah', $cd);
            // return View::make('sipp.administrasi.index')->with(array('statah' => $cd));
            // return View::make('sipp.administrasi.index', compact('halo')); 
            // return view('sipp.administrasi.index', compact('halo')->with(array('statah'=>$cd)));
        }
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
        // $halo2 = PengajuanFeedback::where('id_pengajuan', $id)->get();
        // return view('sipp.administrasi.home_show', compact('halo', 'halo2'));
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
        // // store in the database
        // // $pengajuan = PengajuanFeedback::where('id_pengajuan', $id)->get();
        // $pengfeed = new PengajuanFeedback;
        // $pengfeed->id_pengajuan     = Auth::user()->id;
        // // $pengfeed->id_pengajuan     = $request->id_pengajuan;
        // $pengfeed->kode_feedback    = $request->kode_feedback;
        // $pengfeed->catatan          = $request->catatan;
        // $pengfeed->feedbacker       = 1;
        // $pengfeed->is_viewed        = $request->is_viewed;

        // // dd($pengfeed->id_pengajuan);
        // // $pengjuan = new Pengajuan;
        // // $pengjuan = Pengajuan::find($id);
        // $pengajuan = Pengajuan::where('id_user', $id)->get();
        // $pengajuan->id_user              = Auth::user()->id;
        // // dd($pengajuan->id_user);
        // // $pengjuan->jenis_pengajuan      = 1;

        // if ($pengfeed->kode_feedback == "1") {
        //     $pengaajuan->status_tahapan   = 0;
        //     $pengjuan->flag_revisi      = 1;
        // } elseif ($pengfeed->kode_feedback == "3") {
        //     $pengajuan->status_tahapan   = 1;
        //     $pengajuan->flag_revisi      = 0;
        // }

        // // $pengjuan->flag_ditolak         = $request->flag_ditolak;

        // $pengfeed->save();
        // $pengajuan->save();

        // return redirect()->route('cekberkas.index');
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
