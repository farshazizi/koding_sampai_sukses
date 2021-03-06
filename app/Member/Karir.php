<?php

namespace App\Member;

use Illuminate\Database\Eloquent\Model;

class Karir extends Model
{
    protected $table = 'users_karir';

	public $primaryKey = 'id_karir';	

    public $fillable = [
        'id_user',
        'nama_organisasi',
        'jabatan',
        'tahun_masukKarir',
        'tahun_keluar',
        'checklist',
    ];
}
