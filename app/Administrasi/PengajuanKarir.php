<?php

namespace App\Administrasi;

use Illuminate\Database\Eloquent\Model;

class PengajuanKarir extends Model
{
    protected $table = 'pengajuan_karir';

	public $primaryKey = 'id_karir';	

    public $fillable = [
        'id_pengajuan',
        'nama_organisasi',
        'jabatan',
        'tahun_masukKarir',
        'tahun_keluar',
        'checklist',
    ];
}
