<?php

namespace App\Administrasi;

use Illuminate\Database\Eloquent\Model;

class PengajuanKasus extends Model
{
    protected $table = 'pengajuan_kasus';

	public $primaryKey = 'id_kasus';	

    public $fillable = [
        'id_pengajuan',
        'tahun',
        'tujuan',
        'nama_lembaga',
        'tindakan',
        'catatan',
    ];
}
