<?php

namespace App\Member;

use Illuminate\Database\Eloquent\Model;

class Kasus extends Model
{
    protected $table = 'pengajuan_kasus';

	public $primaryKey = 'id';	

    public $fillable = [
        'id_pengajuan',
        'tahun',
        'tujuan',
        'nama_lembaga',
        'tindakan',
        'checklist',
    ];
}
