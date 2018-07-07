<?php

namespace App\Http\Controllers\Administrasi;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Member\Biodata;

class BerkasUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $halo = Biodata::orderby('id')->get(); 
        return view('sipp.administrasi.berkas_user', compact('halo'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('sipp.administrasi.berkas_user');
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
        $halo = DB::table('pengajuan_administrasi')
            ->select('*')
            ->get();

        if ($request->hasFile('foto_pas')) {
            $img = Biodata::find($id);
            $path = base_path().'/public/images/foto_pas/'.$img->foto_pas;
            
            if (file_exists($path)) {
                unlink($path);
            }
            
            $photo = $request->file('foto_pas');
            $destination = base_path().'/public/images/foto_pas/';
            $filename = $photo->getClientOriginalName();
            $photo->move($destination,$filename);
            $foto_pas['foto_pas'] = $filename;
        }

        return view('sipp.administrasi.berkas_user', compact('halo'));
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
