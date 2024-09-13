<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    use HasFactory;
    protected $table = 'feedback';
    protected $fillable = ['no_kamar',
         'nama',
         'alamat',
         'phone',
         'email',
         'maksud_kunjungan',
         'kamar',
         'makan_pagi',
         'makan_minuman',
         'pelayanan',
         'kebersihan',
         'fasilitas_spa',
         'penampilan_karyawan',
         'keramahtamahan',
         'Kunjungan',
         'datang',
         'saran'];
}
