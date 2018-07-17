<?php

namespace App\Http\Controllers\Tim_Bidang3;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Member\Biodata;
use App\Member\Pendidikan;
use App\Member\Karir;
use App\Member\Kasus;
use App\Member\Pengembangan_Professional;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $halo = Biodata::orderby('id')->get();
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
        $halo = Biodata::where('id', $id)->get();
        $halo2 = Pendidikan::where('id_pengajuan', $id)->get();
        $halo3 = Karir::where('id_pengajuan', $id)->get();
        // $halo4 = Kasus::where('id_pengajuan', $id)->get();
        // $halo4 = Kasus::all();
        $halo5 = Pengembangan_Professional::where('id_pengajuan', $id)->get();

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

    public function buatjadwalwawancara_show($id) {
        $halo = Biodata::where('id', $id)->get();
        return view('sipp.tim_bidang3.index_ubahBerkas', compact('halo'));
    }
}
