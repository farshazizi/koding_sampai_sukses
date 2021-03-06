<?php

namespace App\Member;

use Illuminate\Database\Eloquent\Model;

class Kasus extends Model
{
    protected $table = 'users_kasus';

	public $primaryKey = 'id_kasus';	

    public $fillable = [
        'id_user',
        'tahun',
        'tujuan',
        'nama_lembaga',
        'tindakan',
        'checklist',
    ];
}
