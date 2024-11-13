<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class tambahdata extends Model
{
    use HasFactory;
    protected $fillable=['hari','pekerjaan_yang_dilakukan','tenaga_kerja','peralatan_yang_digunakan','bahan_diterima_ditolak','cuaca','masalah_dan_pemecahan','perintah_yang_diberikan','foto'];
}
