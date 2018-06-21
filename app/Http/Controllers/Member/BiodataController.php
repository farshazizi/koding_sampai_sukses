<?php

namespace App\Http\Controllers\Member;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Member\Biodata;
use Auth;
use DB;

class BiodataController extends Controller
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
        return view('sipp.member.biodata');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // validate the data
        // $this->validate($request, array(
        //     'email'                         => 'required',
        //     'nama_lengkap'                  => 'required',
        //     'pas_foto'                      => 'required',
        //     'tempat_lahir'                  => 'required',
        //     'tanggal_lahir'                 => 'required',
        //     'agama'                         => 'required',
        //     'jenis_kelamin'                 => 'required',
        //     'status_menikah'                => 'required',
        //     'alamat'                        => 'required',
        //     'kodepos'                       => 'required',
        //     'telepon'                       => 'required',
        //     'handphone'                     => 'required',
        //     'psikolog_dari_pendidikan'      => 'required',
        //     'ssp_sipp'                      => 'required',
        //     'praktek_dalam_bidang'          => 'required',
        //     'nama_tempat_praktek'           => 'required',
        //     'alamat_tempat_praktek'         => 'required',
        //     'alat_tes_dikuasai'             => 'required',
        //     'praktek_psikologi_dilakukan'   => 'required',
        //     'klien'                         => 'required',
        // ));

        // store in the database
        $m_biodata = new Biodata;

        $m_biodata->email                           = $request->email;
        $m_biodata->nama_lengkap                    = $request->nama_lengkap;

        $photo = $request->file('foto_pas');
        $destination = base_path().'/public/images/foto_pas';
        $filename = $photo->getClientOriginalName();
        $photo->move($destination,$filename);
        $m_biodata['foto_pas']                      = $filename;

        $m_biodata->tempat_lahir                    = $request->tempat_lahir;
        $m_biodata->tanggal_lahir                   = $request->tanggal_lahir;
        $m_biodata->agama                           = $request->agama;
        $m_biodata->gender                          = $request->gender;
        $m_biodata->status_menikah                  = $request->status_menikah;
        $m_biodata->alamat                          = $request->alamat;
        $m_biodata->kota                            = $request->kota;
        $m_biodata->kodepos                         = $request->kodepos;
        $m_biodata->telepon                         = $request->telepon;
        $m_biodata->handphone                       = $request->handphone;
        $m_biodata->pendidikan1                     = $request->pendidikan1;
        $m_biodata->pendidikan2                     = $request->pendidikan2;
        $m_biodata->pendidikan3                     = $request->pendidikan3;
        $m_biodata->pendidikan4                     = $request->pendidikan4;

        $photo = $request->file('foto_ktp');
        $destination = base_path().'/public/images/foto_ktp';
        $filename = $photo->getClientOriginalName();
        $photo->move($destination,$filename);
        $m_biodata['foto_ktp']                      = $filename;

        $photo = $request->file('foto_kta');
        $destination = base_path().'/public/images/foto_kta';
        $filename = $photo->getClientOriginalName();
        $photo->move($destination,$filename);
        $m_biodata['foto_kta']                      = $filename;

        $photo = $request->file('sertifikat_sebutan');
        $destination = base_path().'/public/images/sertifikat_sebutan';
        $filename = $photo->getClientOriginalName();
        $photo->move($destination,$filename);
        $m_biodata['sertifikat_sebutan']            = $filename;

        $photo = $request->file('surat_izin');
        $destination = base_path().'/public/images/surat_izin';
        $filename = $photo->getClientOriginalName();
        $photo->move($destination,$filename);
        $m_biodata['surat_izin']                    = $filename;

        $m_biodata->bidang1                         = $request->bidang1;
        $m_biodata->bidang2                         = $request->bidang2;
        $m_biodata->bidang3                         = $request->bidang3;
        $m_biodata->bidang4                         = $request->bidang4;
        $m_biodata->bidang5                         = $request->bidang5;
        $m_biodata->nama_praktek                    = $request->nama_praktek;
        $m_biodata->alamat_praktek                  = $request->alamat_praktek;
        $m_biodata->alat_tes                        = $request->alat_tes;
        $m_biodata->teman_praktek                   = $request->teman_praktek;
        $m_biodata->teman1                          = $request->teman1;
        $m_biodata->teman2                          = $request->teman2;
        $m_biodata->teman3                          = $request->teman3;
        $m_biodata->teman4                          = $request->teman4;
        $m_biodata->teman5                          = $request->teman5;
        $m_biodata->klien1                          = $request->klien1;
        $m_biodata->klien2                          = $request->klien2;
        $m_biodata->klien3                          = $request->klien3;
        $m_biodata->klien4                          = $request->klien4;
        $m_biodata->klien5                          = $request->klien5;
        $m_biodata->klien6                          = $request->klien6;
        $m_biodata->bukti_iuran_sipp                = $request->bukti_iuran_sipp;
        $m_biodata->bukti_pembayaran_sipp           = $request->bukti_pembayaran_sipp;
        dd($m_biodata);
        $m_biodata->save();

        // redirect to another page
        // return redirect()->route('registration2');
        return view('sipp.member.pembayaran');
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
        // validate the data
        // $this->validate($request, array(
        //     'email'                         => 'required',
        //     'nama_lengkap'                  => 'required',
        //     'pas_foto'                      => 'required',
        //     'tempat_lahir'                  => 'required',
        //     'tanggal_lahir'                 => 'required',
        //     'agama'                         => 'required',
        //     'jenis_kelamin'                 => 'required',
        //     'status_menikah'                => 'required',
        //     'alamat'                        => 'required',
        //     'kodepos'                       => 'required',
        //     'telepon'                       => 'required',
        //     'handphone'                     => 'required',
        //     'psikolog_dari_pendidikan'      => 'required',
        //     'ssp_sipp'                      => 'required',
        //     'praktek_dalam_bidang'          => 'required',
        //     'nama_tempat_praktek'           => 'required',
        //     'alamat_tempat_praktek'         => 'required',
        //     'alat_tes_dikuasai'             => 'required',
        //     'praktek_psikologi_dilakukan'   => 'required',
        //     'klien'                         => 'required',
        // ));

        // store in the database
        $m_biodata = Biodata::find($id);

        $m_biodata->email                           = $request->input('email');
        $m_biodata->nama_lengkap                    = $request->input('nama_lengkap');

        $photo = $request->file('foto_pas');
        $destination = base_path().'/public/images/foto_pas';
        $filename = $photo->getClientOriginalName();
        $photo->move($destination,$filename);
        $m_biodata['foto_pas']                      = $filename;

        $m_biodata->tempat_lahir                    = $request->input('tempat_lahir');
        $m_biodata->tanggal_lahir                   = $request->input('tanggal_lahir');
        $m_biodata->agama                           = $request->input('agama');
        $m_biodata->gender                          = $request->input('gender');
        $m_biodata->status_menikah                  = $request->input('status_menikah');
        $m_biodata->alamat                          = $request->input('alamat');
        $m_biodata->kota                            = $request->input('kota');
        $m_biodata->kodepos                         = $request->input('kodepos');
        $m_biodata->telepon                         = $request->input('telepon');
        $m_biodata->handphone                       = $request->input('handphone');
        $m_biodata->pendidikan1                     = $request->input('pendidikan1');
        $m_biodata->pendidikan2                     = $request->input('pendidikan2');
        $m_biodata->pendidikan3                     = $request->input('pendidikan3');
        $m_biodata->pendidikan4                     = $request->input('pendidikan4');

        $photo = $request->file('foto_ktp');
        $destination = base_path().'/public/images/foto_ktp';
        $filename = $photo->getClientOriginalName();
        $photo->move($destination,$filename);
        $m_biodata['foto_ktp']                      = $filename;

        $photo = $request->file('foto_kta');
        $destination = base_path().'/public/images/foto_kta';
        $filename = $photo->getClientOriginalName();
        $photo->move($destination,$filename);
        $m_biodata['foto_kta']                      = $filename;

        $photo = $request->file('sertifikat_sebutan');
        $destination = base_path().'/public/images/sertifikat_sebutan';
        $filename = $photo->getClientOriginalName();
        $photo->move($destination,$filename);
        $m_biodata['sertifikat_sebutan']            = $filename;

        $photo = $request->file('surat_izin');
        $destination = base_path().'/public/images/surat_izin';
        $filename = $photo->getClientOriginalName();
        $photo->move($destination,$filename);
        $m_biodata['surat_izin']                    = $filename;

        $m_biodata->bidang1                         = $request->input('bidang1');
        $m_biodata->bidang2                         = $request->input('bidang2');
        $m_biodata->bidang3                         = $request->input('bidang3');
        $m_biodata->bidang4                         = $request->input('bidang4');
        $m_biodata->bidang5                         = $request->input('bidang5');
        $m_biodata->nama_praktek                    = $request->input('nama_praktek');
        $m_biodata->alamat_praktek                  = $request->input('alamat_praktek');
        $m_biodata->alat_tes                        = $request->input('alat_tes');
        $m_biodata->teman_praktek                   = $request->input('teman_praktek');
        $m_biodata->teman1                          = $request->input('teman1');
        $m_biodata->teman2                          = $request->input('teman2');
        $m_biodata->teman3                          = $request->input('teman3');
        $m_biodata->teman4                          = $request->input('teman4');
        $m_biodata->teman5                          = $request->input('teman5');
        $m_biodata->klien1                          = $request->input('klien1');
        $m_biodata->klien2                          = $request->input('klien2');
        $m_biodata->klien3                          = $request->input('klien3');
        $m_biodata->klien4                          = $request->input('klien4');
        $m_biodata->klien5                          = $request->input('klien5');
        $m_biodata->klien6                          = $request->input('klien6');
        $m_biodata->bukti_iuran_sipp                = $request->input('bukti_iuran_sipp');
        $m_biodata->bukti_pembayaran_sipp           = $request->input('bukti_pembayaran_sipp');

        $m_biodata->save();
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
