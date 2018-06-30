<?php

namespace App\Member;

use Illuminate\Database\Eloquent\Model;

class Biodata extends Model
{
    protected $table = 'pengajuan_administrasi';

	public $primaryKey = 'id';	

    public $fillable = [
        'email',
        'nama_lengkap',
        'foto_pas',
        'tempat_lahir',
        'tanggal_lahir',
        'agama',
        'gender',
        'status_menikah',
        'alamat',
        'kota',
        'kodepos',
        'telepon',
        'handphone',
        'pendidikan1',
        'pendidikan2',
        'pendidikan3',
        'pendidikan4',
        'foto_ktp',
        'foto_kta',
        'sertifikat_sebutan',
        'surat_izin',
        'bidang1',
        'bidang2',
        'bidang3',
        'bidang4',
        'bidang5',
        'nama_praktek',
        'alamat_praktek',
        'alat_tes',
        'teman_praktek',
        'teman1',
        'teman2',
        'teman3',
        'teman4',
        'teman5',
        'klien1',
        'klien2',
        'klien3',
        'klien4',
        'klien5',
        'klien6',
        'bukti_iuran_sipp',
        'bukti_pembayaran_sipp',
    ];
}
