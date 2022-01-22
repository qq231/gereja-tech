<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Jemaat extends Model
{
  use HasFactory;
  
  protected $fillable = [
    'photo', 'nama_lengkap', 'kelamin',
    'tempat_lahir', 'tgl_lahir', 'alamat',
    'kab_kota', 'provinsi', 'mobile_phone',
    'wa', 'fb', 'line', 'instagram', 'pekerjaan',
    'status_pernikahan', 'parent_id', 'has_family',
    'pendidikan', 'status_jemaat'
  ];
}
