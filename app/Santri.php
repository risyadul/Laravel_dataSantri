<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Santri extends Model
{
    protected $table = 'tadarus';
    protected $fillable = ['tanggal', 'waktu', 'surah', 'start_ayat', 'end_ayat', 'keterangan'];
}
