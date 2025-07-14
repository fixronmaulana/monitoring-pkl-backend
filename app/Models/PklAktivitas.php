<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PklAktivitas extends Model
{
    use HasFactory;

    protected $table = 'pkl_aktivitas';

    protected $fillable = [
        'mahasiswa_id', 'check_in_at', 'check_out_at', 'lokasi', 'laporan_harian'
    ];

    protected $casts = [
        'check_in_at' => 'datetime',
        'check_out_at' => 'datetime',
    ];

    public function mahasiswa()
    {
        return $this->belongsTo(Mahasiswa::class);
    }
}
