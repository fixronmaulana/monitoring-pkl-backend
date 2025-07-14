<?php

namespace App\Models;

use App\Models\PklAktivitas;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Mahasiswa extends Model
{
    use HasFactory;

    protected $table = 'mahasiswa';

    protected $fillable = [
        'nim', 'nama', 'prodi', 'email', 'no_hp_wa', 'password', 'qr_code_path'
    ];

    protected $hidden = [
        'password',
    ];

    public function pklAktivitas()
    {
        return $this->hasMany(PklAktivitas::class);
    }
}
