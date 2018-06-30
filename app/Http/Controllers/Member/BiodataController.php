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
        // store in the database
        $m_biodata = new Biodata;

        $m_biodata->email                           = $request->email;
        $m_biodata->nama_lengkap                    = $request->nama_lengkap;

        // $m_biodata->foto_pas                        = $request->foto_pas;
        // if ($m_biodata->foto_pas == "") {
        //     $m_biodata->foto_pas = "Belum ada";
        // } else {
        //     // $data = $request->input('image');
        //     // $photo = $request->file('image')->getClientOriginalName();
        //     // $destination = base_path(). '/public/images/surat_izin';
        //     // $request->file('image')->move($destination, $photo);

            $photo = $request->file('foto_pas');
            $destination = base_path().'/public/images/foto_pas';
            $filename = $photo->getClientOriginalName();
            $photo->move($destination,$filename);
            $m_biodata['foto_pas']                  = $filename;
        // }

        // if ($request->hasFile('foto_pas')) {
        //     $image = $request->file('foto_pas');
        //     $filename = time() . '.' . $image->getClientOriginalExtension();
        //     $location = public_path('/images/foto_pas' . $filename);
        //     Image::make($image)->save($location);
        //     $m_biodata->foto_pas                    = $filename;
        // }

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

        // $m_biodata->foto_ktp                        = $request->foto_ktp;
        // if ($m_biodata->foto_ktp == "") {
        //     $m_biodata->foto_ktp = "Belum ada";
        // } else {
        //     $data = $request->input('image');
        //     $photo = $request->file('image')->getClientOriginalName();
        //     $destination = base_path(). '/public/images/surat_izin';
        //     $request->file('image')->move($destination, $photo);

            $photo = $request->file('foto_ktp');
            $destination = base_path().'/public/images/foto_ktp';
            $filename = $photo->getClientOriginalName();
            $photo->move($destination,$filename);
            $m_biodata['foto_ktp']                  = $filename;
        // }

        // $m_biodata->foto_kta                        = $request->foto_kta;
        // if ($m_biodata->foto_kta == "") {
        //     $m_biodata->foto_kta = "Belum ada";
        // } else {
            $photo = $request->file('foto_kta');
            $destination = base_path().'/public/images/foto_kta';
            $filename = $photo->getClientOriginalName();
            $photo->move($destination,$filename);
            $m_biodata['foto_kta']                  = $filename;
        // }

        // $m_biodata->sertifikat_sebutan              = $request->sertifikat_sebutan;
        // if ($m_biodata->sertifikat_sebutan == "") {
        //     $m_biodata->sertifikat_sebutan = "Belum ada";
        // } else {
            $photo = $request->file('sertifikat_sebutan');
            $destination = base_path().'/public/images/sertifikat_sebutan';
            $filename = $photo->getClientOriginalName();
            $photo->move($destination,$filename);
            $m_biodata['sertifikat_sebutan']        = $filename;
        // }

        // $m_biodata->surat_izin                      = $request->surat_izin;
        // if ($m_biodata->surat_izin == "") {
        //     $m_biodata->surat_izin = "Belum ada";
        // } else {
            $photo = $request->file('images');
            $destination = base_path().'/public/images/surat_izin';
            $filename = $photo->getClientOriginalName();
            $photo->move($destination,$filename);
            $m_biodata['surat_izin']                = $filename;
        // }

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

        // $m_biodata->bukti_iuran_sipp                = $request->bukti_iuran_sipp;
        if ($m_biodata->bukti_iuran_sipp == "") {
            $m_biodata->bukti_iuran_sipp == "Belum ada";
        } else {
            $photo = $request->file('bukti_iuran_sipp');
            $destination = base_path().'/public/images/bukti_iuran_sipp';
            $filename = $photo->getClientOriginalName();
            $photo->move($destination,$filename);
            $m_biodata['bukti_iuran_sipp']          = $filename;
        }

        // $m_biodata->bukti_pembayaran_sipp           = $request->bukti_pembayaran_sipp;
        if ($m_biodata->bukti_pembayaran_sipp == "") {
            $m_biodata->bukti_pembayaran_sipp == "Belum ada";
        } else {
            $photo = $request->file('bukti_pembayaran_sipp');
            $destination = base_path().'/public/images/bukti_pembayaran_sipp';
            $filename = $photo->getClientOriginalName();
            $photo->move($destination,$filename);
            $m_biodata['bukti_pembayaran_sipp']      = $filename;
        }
        
        $m_biodata->save();
        // redirect to another page
        // return redirect()->route('biodata.update');
        // return redirect('sipp/member/pembayaran');
        return redirect()->route('biodata.show', $m_biodata->id);
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
        $m_biodata = Biodata::find($id);
        return view('sipp.member.pembayaran', compact('m_biodata'));
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
        $m_biodata = Biodata::find($id);

        // $m_biodata->email                           = $request->input('email');
        // $m_biodata->nama_lengkap                    = $request->input('nama_lengkap');

        // $m_biodata->foto_pas                        = $request->foto_pas;
        // $photo = $request->file('foto_pas');
        // $destination = base_path().'/public/images/foto_pas';
        // $filename = $photo->getClientOriginalName();
        // $photo->move($destination,$filename);
        // $m_biodata['foto_pas']                      = $filename;

        // if ($request->hasFile('foto_pas')) {
        //     $image = $request->file('foto_pas');
        //     $filename = time() . '.' . $image->getClientOriginalExtension();
        //     $location = public_path('/images/foto_pas' . $filename);
        //     Image::make($image)->save($location);
        //     $m_biodata->foto_pas                    = $filename;
        // }

        // $m_biodata->tempat_lahir                    = $request->input('tempat_lahir');
        // $m_biodata->tanggal_lahir                   = $request->input('tanggal_lahir');
        // $m_biodata->agama                           = $request->input('agama');
        // $m_biodata->gender                          = $request->input('gender');
        // $m_biodata->status_menikah                  = $request->input('status_menikah');
        // $m_biodata->alamat                          = $request->input('alamat');
        // $m_biodata->kota                            = $request->input('kota');
        // $m_biodata->kodepos                         = $request->input('kodepos');
        // $m_biodata->telepon                         = $request->input('telepon');
        // $m_biodata->handphone                       = $request->input('handphone');
        // $m_biodata->pendidikan1                     = $request->input('pendidikan1');
        // $m_biodata->pendidikan2                     = $request->input('pendidikan2');
        // $m_biodata->pendidikan3                     = $request->input('pendidikan3');
        // $m_biodata->pendidikan4                     = $request->input('pendidikan4');

        // $m_biodata->foto_ktp                        = $request->foto_ktp;
        // if ($request->hasFile('foto_ktp')) {
        //     $image = $request->file('foto_ktp');
        //     $filename = time() . '.' . $image->getClientOriginalExtension();
        //     $location = public_path('/images/foto_ktp' . $filename);
        //     Image::make($image)->save($location);
        //     $m_biodata->foto_ktp                    = $filename;
        // }

        // $m_biodata->foto_kta                        = $request->foto_kta;
        // if ($request->hasFile('foto_kta')) {
        //     $image = $request->file('foto_kta');
        //     $filename = time() . '.' . $image->getClientOriginalExtension();
        //     $location = public_path('/images/foto_kta' . $filename);
        //     Image::make($image)->save($location);
        //     $m_biodata->foto_kta                    = $filename;
        // }

        // $m_biodata->sertifikat_sebutan              = $request->sertifikat_sebutan;
        // if ($request->hasFile('sertifikat_sebutan')) {
        //     $image = $request->file('sertifikat_sebutan');
        //     $filename = time() . '.' . $image->getClientOriginalExtension();
        //     $location = public_path('/images/sertifikat_sebutan' . $filename);
        //     Image::make($image)->save($location);
        //     $m_biodata->sertifikat_sebutan           = $filename;
        // }

        // $m_biodata->surat_izin                      = $request->surat_izin;
        // if ($request->hasFile('surat_izin')) {
        //     $image = $request->file('surat_izin');
        //     $filename = time() . '.' . $image->getClientOriginalExtension();
        //     $location = public_path('/images/surat_izin' . $filename);
        //     Image::make($image)->save($location);
        //     $m_biodata->surat_izin                  = $filename;
        // }

        // $m_biodata->bidang1                         = $request->input('bidang1');
        // $m_biodata->bidang2                         = $request->input('bidang2');
        // $m_biodata->bidang3                         = $request->input('bidang3');
        // $m_biodata->bidang4                         = $request->input('bidang4');
        // $m_biodata->bidang5                         = $request->input('bidang5');
        // $m_biodata->nama_praktek                    = $request->input('nama_praktek');
        // $m_biodata->alamat_praktek                  = $request->input('alamat_praktek');
        // $m_biodata->alat_tes                        = $request->input('alat_tes');
        // $m_biodata->teman_praktek                   = $request->input('teman_praktek');
        // $m_biodata->teman1                          = $request->input('teman1');
        // $m_biodata->teman2                          = $request->input('teman2');
        // $m_biodata->teman3                          = $request->input('teman3');
        // $m_biodata->teman4                          = $request->input('teman4');
        // $m_biodata->teman5                          = $request->input('teman5');
        // $m_biodata->klien1                          = $request->input('klien1');
        // $m_biodata->klien2                          = $request->input('klien2');
        // $m_biodata->klien3                          = $request->input('klien3');
        // $m_biodata->klien4                          = $request->input('klien4');
        // $m_biodata->klien5                          = $request->input('klien5');
        // $m_biodata->klien6                          = $request->input('klien6');

        // $m_biodata->bukti_iuran_sipp                = $request->input('bukti_iuran_sipp');
        // if ($request->hasFile('bukti_iuran_sipp')) {
        //     $image = $request->file('bukti_iuran_sipp');
        //     $filename = time() . '.' . $image->getClientOriginalExtension();
        //     $location = public_path('/images/bukti_iuran_sipp' . $filename);
        //     Image::make($image)->save($location);
        //     $m_biodata->bukti_iuran_sipp            = $filename;
        // }

        $photo = $request->file('bukti_iuran_sipp');
        $destination = base_path().'/public/images/bukti_iuran_sipp';
        $filename = $photo->getClientOriginalName();
        $photo->move($destination,$filename);
        $m_biodata['bukti_iuran_sipp']              = $filename;

        // $m_biodata->bukti_pembayaran_sipp           = $request->input('bukti_pembayaran_sipp');
        // if ($request->hasFile('bukti_pembayaran_sipp')) {
        //     $image = $request->file('bukti_pembayaran_sipp');
        //     $filename = time() . '.' . $image->getClientOriginalExtension();
        //     $location = public_path('/images/bukti_pembayaran_sipp' . $filename);
        //     Image::make($image)->save($location);
        //     $m_biodata->bukti_pembayaran_sipp       = $filename;
        // }

        $photo = $request->file('bukti_pembayaran_sipp');
        $destination = base_path().'/public/images/bukti_pembayaran_sipp';
        $filename = $photo->getClientOriginalName();
        $photo->move($destination,$filename);
        $m_biodata['bukti_pembayaran_sipp']         = $filename;

        $m_biodata->save();

        return redirect()->route('pendidikan_karir.store', $m_biodata->id);
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
