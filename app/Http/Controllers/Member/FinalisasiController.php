<?php

namespace App\Http\Controllers\Member;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Administrasi\Pengajuan;
use App\Administrasi\PengajuanAdministrasi;
use Auth;
use DB;

class FinalisasiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('sipp.member.finalisasi');
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
        $pengajuan = new Pengajuan;

        $pengajuan->id_user         = Auth::user()->id;
        $pengajuan->jenis_pengajuan = 1;
        $pengajuan->status_tahapan  = 0;
        $pengajuan->flag_revisi     = 0;
        $pengajuan->flag_ditolak    = 0;

        $pengajuan->save();
        
        $result = DB::table('pengajuan')
            ->select('id_pengajuan')
            ->pluck('id_pengajuan');
        $result_id = '';
        $result_id = $result[0];
        
        $results1 = DB::select("INSERT INTO pengajuan_administrasi (id_pengajuan, email, nama_lengkap,foto_pas, tempat_lahir, tanggal_lahir, agama, gender, status_menikah, alamat, kota, kodepos, handphone, pendidikan1, pendidikan2, pendidikan3, foto_ktp, foto_kta, sertifikat_sebutan, surat_izin, bidang1, bidang2, bidang3, bidang4, bidang5, nama_praktek, alamat_praktek, teman1, teman2, teman3, teman4, teman5, klien1, klien2, klien3, klien4, klien5, klien6, bukti_iuran_sipp, bukti_pembayaran_sipp)
            SELECT '$result_id', email, nama_lengkap, foto_pas, tempat_lahir, tanggal_lahir, agama, gender, status_menikah, alamat, kota, kodepos, handphone, pendidikan1, pendidikan2, pendidikan3, foto_ktp, foto_kta, sertifikat_sebutan, surat_izin, bidang1, bidang2, bidang3, bidang4, bidang5, nama_praktek, alamat_praktek, teman1, teman2, teman3, teman4, teman5, klien1, klien2, klien3, klien4, klien5, klien6, bukti_iuran_sipp, bukti_pembayaran_sipp
            FROM users_administrasi");
        
        $results2 = DB::select("INSERT INTO pengajuan_pendidikan (id_pengajuan, jenjang_pendidikan, universitas, bidang_ilmu, tahun_masuk, tahun_lulus, ijazah, transkrip, checklist)
            SELECT '$result_id', jenjang_pendidikan, universitas, bidang_ilmu, tahun_masuk, tahun_lulus, ijazah, transkrip, checklist
            FROM users_pendidikan");

        $results3 = DB::select("INSERT INTO pengajuan_karir (id_pengajuan, nama_organisasi, jabatan, tahun_masukKarir, tahun_keluar, checklist)
            SELECT '$result_id', nama_organisasi, jabatan, tahun_masukKarir, tahun_keluar, checklist
            FROM users_karir");

        $results3 = DB::select("INSERT INTO pengajuan_kasus (id_pengajuan, tahun, tujuan, nama_lembaga, tindakan, catatan)
            SELECT '$result_id', tahun, tujuan, nama_lembaga, tindakan, catatan
            FROM users_kasus");

        $results4 = DB::select("INSERT INTO pengajuan_pengembangan (id_pengajuan, tahun, nama_kegiatan, nama_penyelenggara, durasi, foto_bukti, catatan)
            SELECT '$result_id', tahun, nama_kegiatan, nama_penyelenggara, durasi, foto_bukti, catatan
            FROM users_pengembangan");

        return redirect()->route('afterFinalisasi.index');
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
