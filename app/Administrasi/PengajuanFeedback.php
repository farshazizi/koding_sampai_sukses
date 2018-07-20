<?php

namespace App\Administrasi;

use Illuminate\Database\Eloquent\Model;

class PengajuanFeedback extends Model
{
    protected $table = 'pengajuan_feedback';

	public $primaryKey = 'id_feedback';	

    public $fillable = [
        'id_pengajuan',
        'kode_feedback',
        'catatan',
        'feedbacker',
        'is_viewed',
    ];
}
