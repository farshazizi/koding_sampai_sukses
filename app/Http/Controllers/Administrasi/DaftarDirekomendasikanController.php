<?php

namespace App\Http\Controllers\Administrasi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Member\Biodata;
use PDF;

class DaftarDirekomendasikanController extends Controller
{
    public function pdfLembarPermohonan() {
        set_time_limit(0);
        ini_set("memory_limit",-1);
        ini_set('max_execution_time', 0);
        
        // $bio = Biodata::all();
        $bios = Biodata::where('id', 1)->get();
        $pdf = PDF::loadView('sipp.administrasi.lembar_permohonan_cetak', ['keluar'=>$bios])->setPaper('a4', 'portait');
        return $pdf->download('Lembar Permohonan.pdf');
    }

    public function pdfPortofolioKegiatanPsikolog() {
        set_time_limit(0);
        ini_set("memory_limit",-1);
        ini_set('max_execution_time', 0);
        
        $bios = Biodata::where('id', 1)->get();
        $pdf = PDF::loadView('sipp.administrasi.portofolio_kegiatan_psikolog', ['keluar'=>$bios])->setPaper('a4', 'portait');
        return $pdf->download('Portofolio Kegiatan Psikolog.pdf');
    }

    public function pdfBeritaAcaraPenilaian() {
        set_time_limit(0);
        ini_set("memory_limit",-1);
        ini_set('max_execution_time', 0);
        
        $bios = Biodata::where('id', 1)->get();
        $pdf = PDF::loadView('sipp.administrasi.berita_acara_penilaian', ['keluar'=>$bios])->setPaper('a4', 'portait');
        return $pdf->download('Berita Acara Penilaian.pdf');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $halo = Biodata::orderBy('id')->get();
        return view('sipp.administrasi.daftar_direkomendasikan', compact('halo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sipp.administrasi.daftar_direkomendasikan');
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
        $halo = Biodata::where('id_pengajuan', $id)->get();

        return view('sipp.administrasi.daftar_direkomendasikan', compact('halo'));
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
