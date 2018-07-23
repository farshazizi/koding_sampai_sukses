<?php

namespace App\Http\Controllers\Member;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Member\Kasus;
use Auth;

class PortofolioKasusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('sipp.member.portofolio_kasus');
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
        // store in the database
        for ($i=0;$i<count($request->tujuan);$i++) {
            $kas = new Kasus;
            
            // $kas->id_pengajuan      = $request->id_pengajuan;
            $kas->id_user           = Auth::user()->id;
            $kas->tahun             = $request->tahun[$i]; 
            $kas->tujuan            = $request->tujuan[$i]; 
            $kas->nama_lembaga      = $request->nama_lembaga[$i]; 
            $kas->tindakan          = $request->tindakan[$i]; 
            $kas->catatan           = $request->catatan;

            $kas->save();
        }

        // redirect to another page
        // return redirect()->route('biodata.update');
        return redirect('sipp/member/pengembangan_prof');
        // return redirect('sipp/member/portofolio_kasus');
        // return redirect()->route('portofolio.store', $pend->id);
        // return redirect()->route('biodata.', $pend->id);
        // return view('sipp.member.pengembangan_prof');
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
