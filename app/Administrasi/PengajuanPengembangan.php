<?php

namespace App\Administrasi;

use Illuminate\Database\Eloquent\Model;

class PengajuanPengembangan extends Model
{
    protected $table = 'pengajuan_pengembangan';

	public $primaryKey = 'id_pengembangan';	

    public $fillable = [
        'id_pengajuan',
        'tahun',
        'nama_kegiatan',
        'nama_penyelenggara',
        'durasi',
        'foto_bukti',
        'catatan',
    ];
}
