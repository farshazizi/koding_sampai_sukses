<?php

namespace App\Http\Controllers\Member;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Member\Pendidikan;
use App\Member\Karir;

class PendidikanKarirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sipp.member.pendidikan_karir');
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
        for ($i=0;$i<count($request->jenjang_pendidikan);$i++) {
            $pend = new Pendidikan;
            
            $pend->id_pengajuan          = 5;
            $pend->checklist            = $request->checklist;

            $pend->jenjang_pendidikan   = $request->jenjang_pendidikan[$i]; 
            $pend->universitas          = $request->universitas[$i]; 
            $pend->bidang_ilmu          = $request->bidang_ilmu[$i]; 
            $pend->tahun_masuk          = $request->tahun_masuk[$i]; 
            $pend->tahun_lulus          = $request->tahun_lulus[$i]; 

            // $pend->ijazah               = $request->ijazah[$i];
            // if ($request->hasFile('ijazah'.$i)) {
                // $photo = $request->file('ijazah'.$i); 
                // $destination = base_path().'/public/images/ijazah';
                // $filename = $photo->getClientOriginalName();
                // $photo->move($destination,$filename);
                // $pend['ijazah']          = $filename;
                $photo = $request->file('ijazah'.$i);
                $destination = base_path().'/public/images/ijazah';
                $filename = $photo->getClientOriginalName();
                $photo->move($destination,$filename);
                $m_biodata['ijazah']              = $filename;
            // }

            // $pend->transkrip            = $request->transkrip[$i];
            // if ($request->hasFile('transkrip'.$i)) {
                $photo = $request->file('transkrip'.$i);
                $destination = base_path().'/public/images/transkrip';
                $filename = $photo->getClientOriginalName();
                $photo->move($destination,$filename);
                $pend['transkrip']       = $filename;
            // }

            $pend->save();
        }

        for ($i=0;$i<count($request->nama_organisasi);$i++) {
            $kar = new Karir;
            
            $kar->id_pengajuan           = 5;
            $kar->checklist              = $request->checklist;

            $kar->nama_organisasi        = $request->nama_organisasi[$i];
            $kar->jabatan                = $request->jabatan[$i];
            $kar->tahun_masukKarir       = $request->tahun_masukKarir[$i];
            $kar->tahun_keluar           = $request->tahun_keluar[$i];

            $kar->save();
        }


        // redirect to another page
        // return redirect()->route('biodata.update');
        return redirect('sipp/member/portofolio_kasus');
        // return redirect()->route('portofolio.store', $pend->id);
        // return redirect()->route('biodata.', $pend->id);
        // return view('sipp.member.pembayaran');
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
