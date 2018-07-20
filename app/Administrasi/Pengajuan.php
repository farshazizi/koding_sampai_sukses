<?php

namespace App\Administrasi;

use Illuminate\Database\Eloquent\Model;

class Pengajuan extends Model
{
    protected $table = 'pengajuan';

	public $primaryKey = 'id_pengajuan';	

    public $fillable = [
        'id_user',
        'jenis_pengajuan',
        'status_tahapan',
        'flag_revisi',
        'flag_ditolak',
    ];
}
