<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mitra extends Model
{
    protected  $table = 'mitra';
    protected $fillable = ['nama_mitra', 'desc_mitra', 'hrg_mulai_mitra', 'bep_mitra', 'cabang_mitra'];
}
