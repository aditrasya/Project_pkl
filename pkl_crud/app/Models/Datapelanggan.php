<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Datapelanggan extends Model
{
    use HasFactory;

    protected $table = 'datapelanggan';
    protected $primaryKey = 'id_pelanggan';

    public function pengaduan()
    {
        return $this->hasMany(Pengaduan::class);
    }
}
