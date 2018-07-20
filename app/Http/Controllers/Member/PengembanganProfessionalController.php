<?php

namespace App\Http\Controllers\Member;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Member\Pengembangan_Professional;
use Image;

class PengembanganProfessionalController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('sipp.member.pengembangan_prof');
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
        for ($i=0;$i<count($request->nama_kegiatan);$i++) {
            $peng_prof = new Pengembangan_Professional;
            
            // $peng_prof->id_pengajuan         = $request->id_pengajuan;
            $peng_prof->id_user              = $request->id_user;
            $peng_prof->checklist            = $request->checklist;

            $peng_prof->tahun                = $request->tahun[$i]; 
            $peng_prof->nama_kegiatan        = $request->nama_kegiatan[$i]; 
            $peng_prof->nama_penyelenggara   = $request->nama_penyelenggara[$i]; 
            $peng_prof->durasi               = $request->durasi[$i]; 

            // $photo = $request->file('foto_bukti'.$i);
            // $destination = base_path().'/public/images/foto_bukti';
            // $filename = $photo->getClientOriginalName();
            // $photo->move($destination,$filename);
            // $pen_prof['foto_bukti'.$i]      = $filename;

            // if ($request->hasFile('foto_bukti'.$i)) {
            //     $image = $request->file('foto_bukti'.$i);
            //     $filename = $image->getClientOriginalExtension();
            //     $location = public_path('images/foto_bukti/'.$filename);
            //     Image::make($image)->save($location);
            //     $pen_prof->foto_bukti[$i]   = $filename;
            // }

            if ($files = $request->file('foto_bukti')) {
                foreach ($files as $file) {
                    $filename = $file->getClientOriginalName();
                    $location = public_path('/images/foto_bukti/'.$filename);
                    Image::make($file)->save($location);
                    $peng_prof->foto_bukti = $filename;
                }
            }

            $peng_prof->save();
        }

        // redirect to another page
        // return redirect()->route('biodata.update');
        return redirect('sipp/member/finalisasi');
        // return redirect()->route('portofolio.store', $pend->id);
        // return redirect()->route('biodata.', $pend->id);
        // return view('sipp.member.finalisasi');
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
