<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lagu extends Model


{
        protected $fillable = ['judul','penulis','nama_grup','tahun_rilis'];
}