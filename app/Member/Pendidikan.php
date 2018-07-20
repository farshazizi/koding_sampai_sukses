<?php

namespace App\Member;

use Illuminate\Database\Eloquent\Model;

class Pendidikan extends Model
{
    protected $table = 'users_pendidikan';

	public $primaryKey = 'id_pendidikan';	

    public $fillable = [
        'id_user',
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
