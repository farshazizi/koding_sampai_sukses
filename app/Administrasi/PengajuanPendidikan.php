<?php

namespace App\Administrasi;

use Illuminate\Database\Eloquent\Model;

class PengajuanPendidikan extends Model
{
    protected $table = 'pengajuan_pendidikan';

	public $primaryKey = 'id_pendidikan';	

    public $fillable = [
        'id_pengajuan',
        'jenjang_pendidikan',
        'universitas',
        'bidang_ilmu',
        'tahun_masuk',
        'tahun_lulus',
        'ijazah',
        'transkrip',
        'checklist',
    ];
}
