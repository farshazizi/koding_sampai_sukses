<?php

namespace App\Http\Controllers\Tim_Bidang3;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Administrasi\PengajuanAdministrasi;
use App\Administrasi\PengajuanPendidikan;
use App\Administrasi\PengajuanKarir;
use App\Administrasi\PengajuanKasus;
use App\Administrasi\PengajuanPengembangan;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $halo = PengajuanAdministrasi::orderby('id_pengajuan')->get();
        return view('sipp.tim_bidang3.index', compact('halo'));
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
        $halo = PengajuanAdministrasi::where('id_pengajuan', $id)->get();
        $halo2 = PengajuanPendidikan::where('id_pendidikan', $id)->get();
        $halo3 = PengajuanKarir::where('id_karir', $id)->get();
        $halo4 = PengajuanKasus::where('id_kasus', $id)->get();
        $halo5 = PengajuanPengembangan::where('id_pengembangan', $id)->get();

        return view('sipp.tim_bidang3.index_ubahBerkas', compact('halo', 'halo2', 'halo3', 'halo4', 'halo5'));
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
        for ($i=0;$i<count($request->jenjang_pendidikan);$i++) {
            $kas = Kasus::find($id);
            $pend->id_pengajuan         = $request->id_pengajuan;
            $pend->checklist            = $request->checklist;

            $pend->jenjang_pendidikan   = $request->jenjang_pendidikan[$i];
            $pend->universitas          = $request->universitas[$i];
            $pend->bidang_ilmu          = $request->bidang_ilmu[$i];
            $pend->tahun_masuk          = $request->tahun_masuk[$i];
            $pend->tahun_lulus          = $request->tahun_lulus[$i];
            $pend->tahun_lulus          = $request->tahun_lulus[$i];
        }
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

    public function buatjadwalwawancara_show($id) {
        $halo = PengajuanAdministrasi::where('id_pengajuan', $id)->get();
        return view('sipp.tim_bidang3.index_buatJadwalWawancara', compact('halo'));
    }
}
