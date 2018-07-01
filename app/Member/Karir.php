<?php

namespace App\Member;

use Illuminate\Database\Eloquent\Model;

class Karir extends Model
{
    protected $table = 'pengajuan_karir';

	public $primaryKey = 'id';	

    public $fillable = [
        'id_pengajuan',
        'nama_organisasi',
        'jabatan',
        'tahun_masukKarir',
        'tahun_keluar',
        'checklist',
    ];
}
