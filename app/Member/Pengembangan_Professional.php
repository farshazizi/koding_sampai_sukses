<?php

namespace App\Member;

use Illuminate\Database\Eloquent\Model;

class Pengembangan_Professional extends Model
{
    protected $table = 'users_pengembangan';

	public $primaryKey = 'id_pengembangan';	

    public $fillable = [
        'id_user',
        'tahun',
        'nama_kegiatan',
        'nama_penyelenggara',
        'durasi',
        'foto_bukti',
        'checklist',
    ];
}
