<?php

namespace App\Http\Controllers\Member;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Member\Pendidikan;
use App\Member\Karir;
use Image;
use Auth;

class PendidikanKarirController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('sipp.member.pendidikan_karir');
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
        for ($i=0;$i<count($request->jenjang_pendidikan);$i++) {
            $pend = new Pendidikan;
            
            $pend->id_user              = Auth::user()->id;
            $pend->jenjang_pendidikan   = $request->jenjang_pendidikan[$i]; 
            $pend->universitas          = $request->universitas[$i]; 
            $pend->bidang_ilmu          = $request->bidang_ilmu[$i]; 
            $pend->tahun_masuk          = $request->tahun_masuk[$i]; 
            $pend->tahun_lulus          = $request->tahun_lulus[$i]; 

            // if ($request->hasFile('ijazah'.$i)) {
            //     $image = $request->file('ijazah'.$i);
            //     $filename = $image->getClientOriginalExtension();
            //     $location = public_path('/images/ijazah/'.$filename);
            //     Image::make($image)->save($location);
            //     $pend->ijazah[$i]       = $filename;
            // }

            // $photo = $request->file('foto_pas');
            // $destination = base_path().'/public/images/foto_pas';
            // $filename = $photo->getClientOriginalName();
            // $photo->move($destination,$filename);
            // $m_biodata['foto_pas']                  = $filename;

            // PERCOBAAN KEDUA
            // $ijazah = array();
            // if($files = $request->file('ijazah')){
            //     foreach($files as $file){
                    // $name = $file->getClientOriginalName();
                    // $file->move('/public/images/ijazah/',$name);
                    // $ijazah[] = $name;

                    // $name = $file->getClientOriginalName();
                    // $location = public_path('/public/images/ijazah/'.$name);
                    // Image::make($file)->save($location);
                    // $ijazah[] = $name;

                    // $destination = base_path().'/public/images/ijazah/';
                    // $filename = $file->getClientOriginalName();
                    // $file->move($destination,$filename);
                    // $ijazah[] = $filename;
            //     }
            // }

            // PERCOBAAN KETIGA
            // if ($files = $request->file('file')) {
            //     foreach ($files as $file) {
            //         $filename = time().'.'.$file->getClientOriginalName();

            //         $location = public_path('/public/images/ijazah/'.$filename);

            //         // $request->file->move(public_path('/uploads'), end($filename));
            //         $file->move(public_path('/public/images/ijazah/'), end($filename));

            //         Image::make($file)->save($location);
            //         $ijazah[] = $filename;

            //         // $filename_arr = [];
            //         // array_push($filename_arr, $filename);
            //         // $filename = json_encode($filename_arr);
            //         // $upload->filename = $filename;
            //     }
            // }

            // KEEMPAT
            if ($files = $request->file('ijazah')) {
                foreach ($files as $file) {
                    $filename = $file->getClientOriginalName();
                    $location = public_path('/images/ijazah/'.$filename);
                    Image::make($file)->save($location);
                    $pend->ijazah = $filename;
                }
            }

            if ($files = $request->file('transkrip')) {
                foreach ($files as $file) {
                    $filename = $file->getClientOriginalName();
                    $location = public_path('/images/transkrip/'.$filename);
                    Image::make($file)->save($location);
                    $pend->transkrip = $filename;
                }
            }
            $pend->checklist            = $request->checklist;
            
            $pend->save();
        }

        for ($i=0;$i<count($request->nama_organisasi);$i++) {
            $kar = new Karir;
            
            $kar->id_user                = Auth::user()->id;
            $kar->nama_organisasi        = $request->nama_organisasi[$i];
            $kar->jabatan                = $request->jabatan[$i];
            $kar->tahun_masukKarir       = $request->tahun_masukKarir[$i];
            $kar->tahun_keluar           = $request->tahun_keluar[$i];
            $kar->checklist              = $request->checklist;

            $kar->save();
        }


        // redirect to another page
        return redirect('sipp/member/portofolio_kasus');
        // return redirect()->route('portofolio.store', $pend->id);
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
