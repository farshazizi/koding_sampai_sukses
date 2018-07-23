<?php

namespace App\Administrasi;

use Illuminate\Database\Eloquent\Model;

class PengajuanWawancara extends Model
{
    protected $table = 'pengajuan_wawancara';

	// public $primaryKey = 'id_pengembangan';

    public $fillable = [
        'id_pengajuan',
        'waktu_wawancara',
        'tempat',
        'pewawancara1',
        'pewawancara2',
        'keterampilan1',
        'keterampilan2',
        'keterampilan3',
        'keterampilan4',
        'keterampilan5',
        'etika1',
        'etika2',
        'etika3',
        'kelebihan',
        'kekurangan',
        'catatan',
        'rekomendasi',
    ];
}
