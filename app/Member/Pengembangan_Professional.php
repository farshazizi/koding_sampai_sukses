<?php

namespace App\Member;

use Illuminate\Database\Eloquent\Model;

class Pengembangan_Professional extends Model
{
    protected $table = 'pengajuan_pengembangan';

	public $primaryKey = 'id';	

    public $fillable = [
        'id_pengajuan',
        'tahun',
        'nama_kegiatan',
        'nama_penyelenggara',
        'durasi',
        'foto_bukti',
        'checklist',
    ];
}
