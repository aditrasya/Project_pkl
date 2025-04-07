<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class pengaduanItModel extends Model
{
    //
    protected $table = 'pengaduan_it';
    protected $primaryKey = 'id_pengaduan_it';
    protected $fillable = [
        'nama',
        'bagian',
        'pengaduan_it',
        'update_pengaduan_it'
    ];
}
