<?php

namespace App\Member;

use Illuminate\Database\Eloquent\Model;

class Pendidikan extends Model
{
    protected $table = 'pengajuan_pendidikan';

	public $primaryKey = 'id';	

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
